@props(['job'])

<div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
    <div class="rn-card box-card-style-default">
        <div class="inner">
            <div class="thumbnail"><a class="image" href="/single_job/{{ $job->id }}"><img class="w-100" src="{{ asset('images/blog-grid/blog-01.jpg') }}" alt="Blog Image"></a>
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