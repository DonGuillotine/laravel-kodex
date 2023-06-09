@extends('layouts')

@section('content')

<!-- Start Advance Pricing Area  -->
<div class="rn-blog-details-area">
    <div class="post-page-banner rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content text-center">
                        <div class="page-title">
                            <h1 class="theme-gradient">{{ $single_job->title }}</h1>
                        </div>
                        <ul class="rn-meta-list">
                            <li>
                                <i class="feather-user"></i>
                                <a href="#">Irin Pervin</a>
                            </li>
                            <li>
                                <i class="feather-calendar"></i>
                                10 Dec 2021
                            </li>
                        </ul>
                        <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="{{ $single_job->logo ? asset('storage/' . $single_job->logo) : asset('images/blog-grid/blog-01.jpg') }}" alt="Blog Images"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-content pt--60 rn-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content">
                        <p>{{ $single_job->description }}</p>
                        <div class="category-meta">
                            <span class="text">Tags:</span>
                            <x-job-tags :tagsCsv="$single_job->tags" />
                        </div>
                    </div>
                </div>
            </div>
            
            @auth
                @if (auth()->user()->id === $single_job->user_id)
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <a class="btn-default btn-close-white btn-extra-large" href="/single_job/{{ $single_job->id }}/edit"><span>Update Job</span></a>
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="/single_job/{{ $single_job->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn-default btn-extra-large"><span>Delete Job</span></button>
                            </form>
                        </div> 
                    </div>
                @endif
           
            @endauth                
            
        </div>
    </div>
</div>
<!-- End Advance Pricing Area  -->



@endsection