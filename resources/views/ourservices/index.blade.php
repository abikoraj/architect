@extends('layouts.app')

@section('content')

<header class="hero-banner project-bg">
    <div class="container">
        <h2 class="section-intro__subtitle">Our Services</h2>
        <div class="btn-group breadcrumb">
            <a href="/" class="btn">Home</a>
            <span class="btn btn--rightBorder">Services</span>
        </div>
    </div>
</header>
<section class="service section-margin mb-5 pb-5">
    <div class="container">
        <div class="section-intro">
            <h4 class="section-intro__title">OUR Services</h4>
            <h2 class="section-intro__subtitle bottom-border">Our Offered Services</h2>
        </div>

        <div class="row">
            @foreach (App\Models\Service::all() as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="media service__single">
                    <span class="service__singleIcon"><i class="{{ $item->icon }}"></i></span>
                    <div class="media-body">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
