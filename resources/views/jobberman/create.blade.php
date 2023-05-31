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
                <form class="contact-form-1 rwt-dynamic-form" id="contact-form" method="POST" action="https://rainbowit.net/html/doob/mail.php">
                    <div class="form-group">
                        <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                    </div>

                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Your Subject">
                    </div>

                    <div class="form-group">
                        <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                            <span>Submit Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection