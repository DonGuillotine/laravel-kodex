@extends('layouts')


@section('content')

{{-- Directives --}}

@php
    $hello = "Donald"
@endphp

@if (count($jobs) == 0)
    <p style="color: red">No Jobs Available</p>
@endif
    @include('partials._breadcrumb')
    <!-- Start Theme Style  -->
    <div>
        <div class="rn-gradient-circle"></div>
        <div class="rn-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->

        <!-- Start Rn Blog Area  -->
        <div class="main-content">
            <div class="rn-blog-area rn-section-gap">
                <div class="container">
                    <div class="row mt_dec--30">
                        <div class="col-lg-12">
                            <div class="row row--15">
                                @foreach($jobs as $job)
                                    <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                                        <div class="rn-card box-card-style-default">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="/single_job/{{ $job['id'] }}"><img class="w-100" src="{{ asset('images/blog-grid/blog-01.jpg') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">Irin Pervin</a></li>
                                                        <li class="separator">/</li>
                                                        <li>10 Dec 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="/single_job/{{ $job['id'] }}">{{ $job->title }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="rwt-load-more text-center mt--60">
                                <a class="btn-default" href="blog-grid.html">View More Post
                                    <i class="feather-loader"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rn Blog Area  -->


{{-- @foreach($jobs as $job)
    <h2><a href="/single_job/{{ $job['id'] }}">{{ $job['title'] }}</a></h2>
    <p>{{ $job['description'] }}</p>
    <b>{{ $hello }}</b>
@endforeach --}}

@endsection