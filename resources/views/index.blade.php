@extends('layouts.bootstrap')

@section('content')

    @include('sections.hero')
    @include('sections.chi-sono')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.approach')
    @include('sections.contatti')

@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
