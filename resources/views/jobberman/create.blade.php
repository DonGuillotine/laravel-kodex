@extends('layouts')

@section('content')
<div class="rwt-contact-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">@lang('Create a Job')</span></h4>
                    <h2 class="title w-600 mb--20">@lang('We help you find best hires!')</h2>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15 justify-content-center">
            <div class="col-lg-6">
                <form class="contact-form-1 rwt-dynamic-form" id="contact-form" method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="company" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Job Title">
                    </div>
                    <div class="form-group">
                        <input type="text" name="location" placeholder="Job Location">
                    </div>

                    <div class="form-group">
                        <input type="text" name="website" placeholder="Website URL">
                    </div>

                    <div class="form-group">
                        <input type="text" name="tags" placeholder="Tags (Comma Seperated Values)">
                    </div>

                    <div class="form-group">
                        <textarea name="description" placeholder="Job Description"></textarea>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" class="btn-default btn-large rn-btn">
                            <span>Submit Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection