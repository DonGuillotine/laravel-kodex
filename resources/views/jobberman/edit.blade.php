@extends('layouts')

@section('content')
<div class="rwt-contact-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">@lang('Edit a Job')</span></h4>
                    <h2 class="title w-600 mb--20">Edit: {{ $job->title }}</h2>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15 justify-content-center">
            <div class="col-lg-6">
                    <form method="POST" action="/edit_job" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div  class="contact-form-1 rwt-dynamic-form">
                            <div class="form-group">
                                <input type="text" name="company" placeholder="Company Name" value="{{ $job->company }}">
                                @error('company')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="title" placeholder="Job Title" value="{{ $job->title }}"> 
                                @error('title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="location" placeholder="Job Location" value="{{ $job->location }}">
                                @error('location')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="website" placeholder="Website URL" value="{{ $job->website }}">
                                @error('website')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" value="{{ $job->email }}">
                                @error('email')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="tags" placeholder="Tags (Comma Seperated Values)" value="{{ $job->tags }}">
                                @error('tags')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="file" name="logo" placeholder="Company Logo">
                                @error('logo')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <img class="w-50 mb-5" src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('images/blog-grid/blog-01.jpg') }}" alt="Blog Image">

                            <div class="form-group">
                                <textarea name="description" placeholder="Job Description">{{ $job->description }}</textarea>
                                @error('description')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button name="submit" type="submit" class="btn-default btn-large rn-btn">
                                    <span>Edit Job</span>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection