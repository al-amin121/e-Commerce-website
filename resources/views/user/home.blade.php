@extends('user.master')
@section('body')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('user.banner')
    <!-- Banner Ends Here -->

    @include('user.latest-products')

    @include('user.best-features')


    @include('user.creative-unuque')
@endsection
