@extends('layouts')

@section('content')

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
            @include('partials._search')
            <div class="rn-blog-area rn-section-gap">
                <div class="container">
                    <div class="row mt_dec--30">
                        <div class="col-lg-12">
                            <div class="row row--15">
                                @foreach($jobs as $job)
                                    <x-job-card :job="$job" />
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="text-center mt--60">
                                {{ $jobs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rn Blog Area  -->
@endsection