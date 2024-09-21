@extends('admin.layouts.master')

@section('MainContent')
@include('admin.include.slider')
<!--/ End Slider Area -->

<!-- Start schedule Area -->
@include('admin.include.schedule')
<!--/End Start schedule Area -->

<!-- Start feautes -->
@include('admin.include.feautes')
<!--/ End Feautes -->

<!-- Start funfacts -->
@include('admin.include.funfacts')
<!--/ End Fun-facts -->

<!-- Start Why choose -->
@include('admin.include.choose')
<!--/ End Why choose -->

<!-- Start Call to action -->
@include('admin.include.call')
<!--/ End Call to action -->

<!-- Start portfolio -->
@include('admin.include.portfolio')
<!--/ End portfolio -->
@include('admin.include.portfolio')
<!-- Start service -->
@include('admin.include.service')
<!--/ End service -->

<!-- pricing Table -->
@include('admin.include.pricing')
<!--/ End Pricing Table -->
<!-- Start blog area -->
@include('admin.include.blog')
<!-- End Blog Area -->
<!-- Start clients -->
@include('admin.include.clients')
<!--/Ens clients -->
<!-- Start appointment -->
@include('admin.include.appointment')
<!-- End Appointment -->

<!-- Start newsletter Area -->
@include('admin.include.newsletter')
<!-- /End Newsletter Area -->
@endsection