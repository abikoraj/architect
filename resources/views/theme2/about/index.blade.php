@extends('theme2.app')
@section('content')
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

  @media(max-width:768px){
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
      <section class="breadcrumbs-custom bg-image" style="background-image: url({{asset('jumbotron.png')}});">
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
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h4 class="title">Experience since 1999</h4>
              <p>Vae. Pol, caesium! Cum boreas crescere, omnes ususes captis teres, rusticus nuclear vexatum iacerees.</p>
              <p>Poeta studeres, tanquam nobilis medicina. Caesium moris, tanquam emeritis plasmator. Nunquam convertam adgium. Danista raptus lumen est. Cum epos volare, omnes impositioes imperium castus, rusticus adgiumes.</p>
              <h4 class="title">Our Mission</h4>
              <p>Raptus bullas ducunt ad glos. Lunas cantare! Assimilant satis ducunt ad teres liberi. Sunt nomenes manifestum neuter, audax lixaes.</p>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="row grid-2">
                <div class="col-6"><img src="images/about-1-273x214.jpg" alt="" width="273" height="214"/><img src="images/about-2-273x214.jpg" alt="" width="273" height="214"/>
                </div>
                <div class="col-6"><img src="images/about-3-273x451.jpg" alt="" width="273" height="451"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our History-->
      <section class="section parallax-container bg-gray-dark" data-parallax-img="images/parallax-6.jpg">
        <div class="parallax-content">
          <div class="section-md text-center">
            <div class="container">
              <h2>Our History</h2>
              <div class="timeline">
                <div class="timeline__item-wrap">
                  <!-- Timeline item-->
                  <article class="timeline__item">
                    <div class="timeline__item-header">
                      <h5>Establishment,1999</h5>
                    </div>
                    <div class="timeline__item-main"><img src="images/about-4-93x86.jpg" alt="" width="93" height="86"/>
                      <p>Cum vita assimilant, omnes bullaes dignus alter, mirabilis cottaes.</p>
                    </div>
                  </article>
                </div>
                <div class="timeline__item-wrap">
                  <!-- Timeline item-->
                  <article class="timeline__item timeline__item-reverse">
                    <div class="timeline__item-header">
                      <h5>Recognition,2005</h5>
                    </div>
                    <div class="timeline__item-main"><img src="images/about-5-93x86.jpg" alt="" width="93" height="86"/>
                      <p>Cursuss resistere! Domesticus, grandis compaters callide dignus.</p>
                    </div>
                  </article>
                </div>
                <div class="timeline__item-wrap">
                  <!-- Timeline item-->
                  <article class="timeline__item">
                    <div class="timeline__item-header">
                      <h5>Industry Leader,2019</h5>
                    </div>
                    <div class="timeline__item-main"><img src="images/about-6-93x86.jpg" alt="" width="93" height="86"/>
                      <p>Consiliums peregrinationes in bi-color aetheres! Victrixs.</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
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