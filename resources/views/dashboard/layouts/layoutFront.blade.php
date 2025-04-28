@php
$configData = Helper::appClasses();
$isFront = true;
@endphp

@section('layoutContent')

@extends('dashboard/layouts/commonMaster' )

@include('layouts/sections/navbar/navbar-front')

<!-- Sections:Start -->
@yield('content')
<!-- / Sections:End -->

@include('dashboard/layouts/sections/footer/footer-front')
@endsection
