@extends('layouts.app')

@section('content')

<header class="hero-banner project-bg">
    <div class="container">
        <h2 class="section-intro__subtitle">Our Services</h2>
        <div class="btn-group breadcrumb">
            <a href="/" class="btn">Home</a>
            <span class="btn btn--rightBorder">Service</span>
        </div>
    </div>
</header>

<section class="portfolio section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 class="section-intro__title">OUR PROJECTS</h4>
            <h2 class="section-intro__subtitle bottom-border">Latest Completed Projects</h2>
        </div>

        @php
            $i=0;
        @endphp
        @foreach (App\Models\Project::latest()->get() as $item)
        <div class="row align-items-end pb-md-5 mb-4">
            <div class="col-md-7 mb-4 mb-md-0 order-md-{{ $i==0?1:2 }}">
                <div class="portfolio__img">
                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-5 mb-5 pl-xl-5 order-md-{{ $i==0?2:1 }}">
                <h4 class="section-intro__title left-border">{{ $item->created_at }}</h4>
                <h2 class="section-intro__subtitle small">{{ $item->title }}</h2>
                <p>{{ $item->description }}</p>

                {{-- <a class="btn btn--rightBorder mt-3" href="#">Read More</a> --}}
            </div>
            @php
                $i+=1;
                if($i==2){
                    $i=0;
                }
            @endphp
        </div>
        @endforeach
    </div>
</section>

@endsection
