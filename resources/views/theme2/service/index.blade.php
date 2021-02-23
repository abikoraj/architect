@extends('theme2.app')
@section('content')

    <style>
         .section-intro__subtitle{
            position: relative;
            color: #242424;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2em;
            padding-bottom: 10px;
            margin-bottom: 25px;
            text-align:center;
        }

        .section-intro__subtitle:after {
            position: absolute;
            content: '';
            left:calc(50% - 25px);
            bottom: 0px;
            width: 50px;
            height: 4px;
            background-color: #d9b256;
        }
        
        .right:after {
            position: absolute;
            content: '';
            right: 0;
            bottom: 0px;
            width: 50px;
            height: 2px;
            background-color: #d9b256;
        }
        .left:after {
            position: absolute;
            content: '';
            left:0;
            bottom: 0px;
            width: 50px;
            height: 2px;
            background-color: #d9b256;
        }
        .service_title{
            font-size: 35px;
            font-weight:800;
            padding-top:30px;
            padding-bottom: 7px;
            margin: 10px 0px;
            position: relative;
        }
        /* .service_title:after {
            position: absolute;
            content: '';
            left: 0px;
            bottom: 0px;
            width: 50px;
            height: 3px;
            background-color: #d9b256;
        } */
        .service_desc_left{
            padding-right: 100px;
            font-weight: 400;
            color:#535353;
        }
        .service_desc_right{
            padding-left: 100px;
            font-weight: 400;
            color:#535353;
        }

        @media (max-width:768px){
            .right:after,.left:after   {
                position: absolute;
                content: '';
                left:calc(50% - 25px);
                bottom: 0px;
                width: 50px;
                height: 2px;
                background-color: #d9b256;
            }
            
            .service_title{
                font-size: 35px;
                font-weight:800;
                padding-top:0px;
                padding-bottom: 7px;
                margin: 10px 0px;
                position: relative;
                text-align:center !important;
            }
            /* .service_title:after {
                position: absolute;
                content: '';
                left: 0px;
                bottom: 0px;
                width: 50px;
                height: 3px;
                background-color: #d9b256;
            } */
            .service_desc_left, .service_desc_right{
                padding: 0px 15px;
                font-weight: 400;
                color:#535353;
                text-align: justify !important;
            }
           
        }

        
    </style>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url({{asset('jumbotron.png')}});">
        <div class="container">
          <h2 class="breadcrumbs-custom__title">Our Services</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Services</li>
          </ul>
        </div>
    </section>

    <section class="section section-md bg-default pb-0">
        <div class="section-intro">
            <div class="container">

                <h4 class="section-intro__title text-center" style="font-size:16px;font-weight:400">
                    Lorem ipsum dolor sit amet consectetur adipisicing
                </h4>
                <h2 class="section-intro__subtitle ">Our Offered Services</h2>
            </div>
        </div>
    </section>
    @php
        $i=0;
    @endphp
    @foreach (\App\Models\Service::all() as $item)
        <div class="row py-5">
            <div class="col-md-5 order-md-{{ $i==0?1:2 }}">
                <img src="{{asset($item->icon)}}" alt="" style="width:100%;">
            </div>
            <div class="col-md-7 align_item_center order-md-{{ $i==0?2:1 }}">
                <div style="padding-top:10%;">

                    <h2 class="service_title {{$i==1?"text-right right":"left"}}">{{$item->title}}</h2>
                    <h6 class=" {{$i==1?"text-right service_desc_right" :"service_desc_left"}}">{{$item->description}}</h6>
                </div>
            </div>
        </div>
        @php
            $i+=1;
            if($i==2){
                $i=0;
            }
        @endphp
    @endforeach

@endsection