@extends('layouts')

@section('content')
    <!-- Start Timeline-Style-One  -->
    <div class="rwt-timeline-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Manage Jobs</span></h4>
                        <h2 class="title w-600 mb--20">See Jobs you have created!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-timeline-wrapper timeline-style-one position-relative">
                        <div class="timeline-line"></div>
                        @if (count($jobs) != 0)
                            @foreach ($jobs as $jobberman)
                                <div class="single-timeline mt--50">
                                    <div class="timeline-dot">
                                        <div class="time-line-circle"></div>
                                    </div>
                                    <div class="single-content">
                                        <div class="inner">
                                            <div class="row row--30 align-items-center">
                                                <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                    <div class="content">
                                                        <span class="date-of-timeline">{{ auth()->user()->name }}</span>
                                                        <h2 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">{{ $jobberman->title }}</h2>
                                                        <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">{{ $jobberman->description }}</p>
                                                        <div class="row row--30">
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                                                                    <a class="btn-default btn-large round" href="/single_job/{{$jobberman->id}}/edit"><span>Update Job</span></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                                                                    <form method="POST" action="/single_job/{{ $jobberman->id }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn-default btn-large round"><span>Delete Job</span></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2">
                                                    <div class="thumbnail">
                                                        <img class="w-100" src="{{ $jobberman->logo ? asset('storage/' . $jobberman->logo) : asset('images/blog-grid/blog-01.jpg') }}" alt="Corporate Html Template">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Timeline-Style-One  -->
@endsection