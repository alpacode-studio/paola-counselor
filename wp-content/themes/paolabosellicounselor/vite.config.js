import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin'
import path from 'path'
import imagemin from 'vite-plugin-imagemin'

// https://vitejs.dev/config/
export default defineConfig(({ command, mode }) => {
  // Load env file based on `mode` in the current working directory.
  const env = loadEnv(mode, process.cwd(), '')
  const isProduction = mode === 'production'
  
  return {
    base: env.VITE_BASE_URL || '/app/themes/sage/public/build/',
    
    plugins: [
      laravel({
        input: [
          // Main application entry points
          'resources/css/app.css',
          'resources/js/app.js',
          
          // Theme-specific assets (conditional loading)
          'resources/css/custom-theme.css',
          'resources/js/custom-theme.js',
          
          // Editor assets (WordPress block editor)
          'resources/css/editor.css',
          'resources/js/editor.js',
        ],
        refresh: [
          'app/**/*.php',
          'resources/views/**/*.php',
          'resources/**/*.js',
          'resources/**/*.css',
        ],
      }),

      wordpressPlugin({
        // Additional WordPress-specific optimizations
        resolveBlockAssets: true,
        resolveViewAssets: true,
      }),

      // Generate the theme.json file
      wordpressThemeJson({
        disableTailwindColors: false,
        disableTailwindFonts: false,
        disableTailwindFontSizes: false,
        // Add custom spacing scale
        customSpacing: true,
        // Include custom properties
        customProperties: true,
      }),

      // Image optimization with WebP conversion
      imagemin({
        gifsicle: { optimizationLevel: 7 },
        mozjpeg: { quality: 85 },
        pngquant: { quality: [0.70, 0.85] },
        webp: { quality: 85 },
        // Convert to WebP while keeping originals
        webpOptions: {
          quality: 85,
          method: 6,
        }
      }),
    ],
    
    resolve: {
      alias: {
        '@': path.resolve(__dirname, './resources'),
        '@scripts': path.resolve(__dirname, './resources/js'),
        '@styles': path.resolve(__dirname, './resources/css'),
        '@fonts': path.resolve(__dirname, './resources/fonts'),
        '@images': path.resolve(__dirname, './resources/images'),
        '@components': path.resolve(__dirname, './resources/js/components'),
        '@utils': path.resolve(__dirname, './resources/js/utils'),
        '@views': path.resolve(__dirname, './resources/views'),
      },
    },
    
    server: {
      // Development server configuration
      host: true,
      port: 3000,
      strictPort: false,
      cors: true,
      // Proxy configuration for WordPress development
      proxy: {
        '/wp-admin': env.VITE_WP_URL || 'http://localhost',
        '/wp-content': env.VITE_WP_URL || 'http://localhost',
        '/wp-includes': env.VITE_WP_URL || 'http://localhost',
        '/wp-json': env.VITE_WP_URL || 'http://localhost',
      },
      // HMR configuration
      hmr: {
        host: 'localhost',
        protocol: 'ws',
      },
    },
    
    css: {
      // CSS preprocessing options
      preprocessorOptions: {
        scss: {
          additionalData: `@import "@styles/abstracts/_variables.scss";`,
        },
      },
      // Enable CSS code splitting for better performance
      devSourcemap: !isProduction,
    },
    
    build: {
      // Output directory
      outDir: 'public/build',
      // Assets directory
      assetsDir: 'assets',
      // Generate source maps
      sourcemap: isProduction ? 'hidden' : true,
      // Minification
      minify: isProduction ? 'terser' : false,
      terserOptions: {
        compress: {
          drop_console: isProduction,
          drop_debugger: isProduction,
          pure_funcs: isProduction ? ['console.log', 'console.info', 'console.warn'] : [],
          passes: 2, // Multiple optimization passes
        },
        mangle: {
          safari10: true, // Fix Safari 10 bug
        },
        format: {
          comments: false,
        },
      },
      // Target modern browsers
      target: ['es2020', 'chrome80', 'firefox78', 'safari14'],
      
      // Rollup options with optimized chunking strategy
      rollupOptions: {
        output: {
          // Optimized asset naming
          assetFileNames: (assetInfo) => {
            const info = assetInfo.name.split('.')
            const ext = info[info.length - 1]
            if (/png|jpe?g|svg|gif|tiff|bmp|ico|webp/i.test(ext)) {
              return `assets/images/[name]-[hash][extname]`
            } else if (/woff2?|ttf|otf|eot/i.test(ext)) {
              return `assets/fonts/[name]-[hash][extname]`
            } else if (/css/i.test(ext)) {
              return `assets/css/[name]-[hash][extname]`
            }
            return `assets/[name]-[hash][extname]`
          },
          chunkFileNames: 'assets/js/chunks/[name]-[hash].js',
          entryFileNames: 'assets/js/[name]-[hash].js',
          
          // Strategic manual chunks for optimal loading
          manualChunks: (id) => {
            // Critical vendor libraries (load first)
            if (id.includes('bootstrap') || id.includes('@popperjs')) {
              return 'vendor-bootstrap'
            }
            
            // Core animation/interaction libraries
            if (id.includes('aos') || id.includes('typed.js')) {
              return 'vendor-animations'
            }
            
            // UI component libraries
            if (id.includes('swiper')) {
              return 'vendor-swiper'
            }
            if (id.includes('glightbox')) {
              return 'vendor-lightbox'
            }
            
            // Layout and image libraries
            if (id.includes('isotope-layout') || id.includes('imagesloaded') || id.includes('masonry')) {
              return 'vendor-layout'
            }
            
            // Utility libraries
            if (id.includes('node_modules') && (
              id.includes('lodash') || 
              id.includes('lazysizes') ||
              id.includes('intersection-observer')
            )) {
              return 'vendor-utils'
            }
            
            // All other node_modules
            if (id.includes('node_modules')) {
              return 'vendor-misc'
            }
            
            // Application chunks
            if (id.includes('resources/js/components')) {
              return 'app-components'
            }
            if (id.includes('resources/js/utils')) {
              return 'app-utils'
            }
            if (id.includes('custom-theme')) {
              return 'theme-custom'
            }
          },
        },
        
        // External dependencies optimization
        external: [
          // WordPress globals (if needed)
          'wp',
          'jquery', // If WordPress jQuery is preferred
        ],
        
        // Tree-shaking optimization
        treeshake: {
          moduleSideEffects: (id) => {
            // Keep side effects for CSS files and certain libraries
            return id.includes('.css') || 
                   id.includes('aos/dist/aos.css') ||
                   id.includes('bootstrap/dist/css') ||
                   id.includes('swiper/css')
          },
          propertyReadSideEffects: false,
          tryCatchDeoptimization: false,
          unknownGlobalSideEffects: false,
        },
      },
      
      // CSS code splitting
      cssCodeSplit: true,
      // Inline assets threshold (optimized)
      assetsInlineLimit: 2048, // Reduced for better caching
      // Chunk size warnings
      chunkSizeWarningLimit: 800, // More aggressive
      // Compressed size reporting (disabled for faster builds)
      reportCompressedSize: false,
      // Copy public directory
      copyPublicDir: true,
      
      // Enhanced CSS target for modern browsers
      cssTarget: ['chrome80', 'firefox78', 'safari14'],
    },
    
    optimizeDeps: {
      // Pre-bundle critical dependencies
      include: [
        'bootstrap/dist/js/bootstrap.bundle.min.js',
        'aos',
        'glightbox',
        'swiper',
        'swiper/modules',
        'typed.js',
      ],
      
      // Exclude WordPress and development dependencies
      exclude: [
        '@wordpress/block-editor',
        '@wordpress/blocks',
        '@wordpress/components',
        'jquery', // Use WordPress jQuery
      ],
      
      // Dependency pre-bundling options
      esbuildOptions: {
        target: 'es2020',
        // Keep names for better debugging
        keepNames: !isProduction,
      },
    },
    
    // ESBuild optimization
    esbuild: {
      // Production optimizations
      drop: isProduction ? ['console', 'debugger'] : [],
      legalComments: 'none',
      target: 'es2020',
      // Keep class names in development
      keepNames: !isProduction,
      // Minify identifiers in production
      minifyIdentifiers: isProduction,
      minifySyntax: isProduction,
      minifyWhitespace: isProduction,
    },
    
    // Preview server
    preview: {
      port: 4173,
      strictPort: true,
      host: true,
    },
    
    // Global constants
    define: {
      'process.env.NODE_ENV': JSON.stringify(mode),
      '__DEV__': !isProduction,
      '__PROD__': isProduction,
      '__VERSION__': JSON.stringify(process.env.npm_package_version),
    },
    
    // Web Workers optimization
    worker: {
      format: 'es',
      rollupOptions: {
        output: {
          entryFileNames: 'assets/worker/[name]-[hash].js',
        },
      },
    },
    
    // Performance optimizations
    performance: {
      // Disable performance hints in development
      hints: isProduction ? 'warning' : false,
    },
    
    // Cache configuration
    cacheDir: 'node_modules/.vite',
  }
})