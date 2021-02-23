@extends('theme2.app')
@section('content')
@php
$setting=\App\Models\Setting::first();

@endphp
<style>
  .service-item{
    box-shadow: 0px 0px 25px 0px rgb(0 0 0 / 20%);
    margin-bottom:7rem;
  }
  .portfolio__img{
    letter-spacing: 1rem;
  }
  .section-intro__subtitle{

      position: relative;
      color: #242424;
      font-size: 28px;
      font-weight: 700;
      line-height: 1.2em;
      padding-bottom: 15px;
      margin-bottom: 25px;
  }

  .section-intro__subtitle:after {
      position: absolute;
      content: '';
      left: 0px;
      bottom: 0px;
      width: 35px;
      height: 2px;
      background-color: #d9b256;
  }

  .section-intro__desc{
    position: relative;
    color: #797979;
    font-size: 16px;
    line-height: 1.8em;
    margin-bottom: 20px;
  }

  .cta-title{
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 15px;
  }
  .cta-title::after{
      position: absolute;
      content: '';
      left: 0px;
      bottom: 0px;
      width: 50px;
      height: 4px;
      background-color: #d9b256;
  }

  .about-text{
    word-break: break-word;
  }
  @media(max-width:768px){
    .about-text{
      text-align:justify;
    }
    .cta{
      text-align:center;
      padding:35px 15px;
    }
    .cta-title{
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 15px;
    text-align:center;
  }
  .cta-title::after{
      position: absolute;
      content: '';
      left: calc(50% - 17px);
      bottom: 0px;
      width: 35px;
      height: 2px;
      background-color: #d9b256;
  }
    .section-intro__subtitle{
      text-align:center;
      font-size: 20px;
    }
    .section-intro__desc{
      margin-top:10px;
      color:#9b9b9b;
      font-weight: 400;
      text-align:justify;
    }
      
    .title{
      text-align:Center;
    }
    p{
      text-align:justify;
      font-weight: 400;

    }
    .section-intro__subtitle:after {
        position: absolute;
        content: '';
        left: calc(50% - 17px);
        bottom: 0px;
        width: 34px;
        height: 2px;
        background-color: #d9b256;
    }
    .service-item{
        box-shadow: none;
      margin-bottom:3rem;

    }
  }
</style>
     <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url({{asset($setting->jumbotron)}});">
        <div class="container">
          <h2 class="breadcrumbs-custom__title">About Us</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </section>
      <!-- Experience since 1999-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="row row-70 justify-content-md-center justify-content-xl-between">
            @foreach (\App\Models\AboutUs::all() as $about)
                
              <div class="col-md-10 col-lg-6 col-xl-5">
                <h4 class="title mb-3">{{$about->title}}</h4>
                <div class="about-text" style="">
                  {!! $about->desc !!}
                </div>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7">
                  <div class="row">
                    @if ($about->multiple==1)
                        <div class="col-md-6 mb-1">
                            <img src="{{asset($about->image1)}}" class="w-100" alt="">
                        </div>
                        <div class="col-md-6 mb-1">
                            <img src="{{asset($about->image2)}}" class="w-100" alt="">
                        </div>
                    @else
                        <div class="col-md-12">
                            <img src="{{asset($about->image1)}}" class="w-100" alt="">
                        </div>
                    @endif
                  </div>
              </div>
            @endforeach
          
          </div>
        </div>
      </section>
      <!-- Our History-->
      <section class="section bg-gray-dark" >
      <div class="cta row">
        <div class="col-md-6 d-none d-md-block" style="clip-path: polygon(0 0, 97% 0, 81% 100%, 0% 100%);
        ">
          <img src="{{asset($setting->contact_cta_image)}}" class="w-100" alt="">
        </div>
        <div class="col-md-6 py-md-5 py-0">
          <h3 class="mt-md-5 mt-0 cta-title">{{$setting->contact_cta_title}}</h3 class="mt-md-5 mt-0 right">
          <h5>
            {!!$setting->contact_cta_text!!}
          </h5>
        </div>
      </div>
      </section>
      @php
          $i=0;
      @endphp
      <!-- Social Responsibility & Eco Standards-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="py-3">
            @foreach (App\Models\Project::get() as $item)
            <div class="row  service-item" >
                <div class="col-md-7 mb-4 mb-md-0 order-md-{{ $i==0?"1 pl-md-0":"2 pr-md-0" }}" style="letter-spacing: 1rem;">
                    <div class="portfolio__img">
                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-5 mb-0 mb-md-5 py-2 py-md-5  order-md-{{ $i==0?2:1 }}">
                    <div class="p-0 p-md-4">

                      <h2 class="section-intro__subtitle ">{{ $item->title }}</h2>
                      <p class="section-intro__desc">{{ $item->description }}</p>
                    </div>
    
                    {{-- <a class="btn btn--rightBorder mt-3" href="#">Read More</a> --}}
                </div>
            </div>
            @php
                    $i+=1;
                    if($i==2){
                        $i=0;
                    }
                @endphp
            @endforeach
           
          </div>
        </div>
      </section>
@endsection