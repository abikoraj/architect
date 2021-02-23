@extends('theme2.app')
@section('content')
@php
$setting=\App\Models\Setting::first();

@endphp
 <!-- Breadcrumbs-->
 <section class="breadcrumbs-custom bg-image" style="background-image: url({{asset($setting->jumbotron)}});">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">Contacts</h2>
      <ul class="breadcrumbs-custom__path">
        <li><a href="index.html">Home</a></li>
        <li class="active">Contacts</li>
      </ul>
    </div>
  </section>
  <!-- Get in Touch-->
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="layout-bordered">
        <div class="layout-bordered__main text-center">
          <div class="layout-bordered__main-inner">
            <h3>Get in Touch</h3>
            <p>
                {{$setting->contact_quote}}
            </p>
            <!-- RD Mailform-->
            <form  method="post" action="{{route('theme2.message')}}">
              @csrf
              
              <div class="row align-items-md-end row-20">
                <div class="col-md-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-first-name">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                    <label class="form-label" for="contact-phone">Phone</label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-wrap">
                    <select name="service" id="service" class="form-input" required>
                      <option >Select A Service</option>
                      @foreach (\App\Models\Service::all() as $item)
                          <option value="{{$item->title}}">{{$item->title}}</option>
                      @endforeach
                    </select>
                    {{-- <label class="form-label" for="contact-phone">Phone</label> --}}
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message">Your Message</label>
                    <textarea class="form-input" id="contact-message" name="message" data-constraints=""></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email ">
                    <label class="form-label" for="contact-email">E-mail</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <button class="button button-block button-primary" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="layout-bordered__aside">
          <div class="layout-bordered__aside-item">
            <p class="heading-8">Get social</p>
            <ul class="list-inline-xs">
              <li><a class="icon icon-sm icon-default fa fa-facebook" href="{{$setting->fb}}"></a></li>
              <li><a class="icon icon-sm icon-default fa fa-twitter" href="{{$setting->insta}}"></a></li>
              <li><a class="icon icon-sm icon-default fa fa-google" href="{{$setting->twitter}}"></a></li>
             
            </ul>
          </div>
          <div class="layout-bordered__aside-item">
            <p class="heading-8">Phone</p>
            <div class="unit flex-row unit-spacing-xxs">
              <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
              <div class="unit__body"><a href="tel:{{$setting->phone}}">{{$setting->twitter}}</a></div>
            </div>
          </div>
          <div class="layout-bordered__aside-item">
            <p class="heading-8">E-mail</p>
            <div class="unit flex-row unit-spacing-xxs">
              <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
              <div class="unit__body"><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></div>
            </div>
          </div>
          <div class="layout-bordered__aside-item">
            <p class="heading-8">Address</p>
            <div class="unit flex-row unit-spacing-xxs">
              <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
              <div class="unit__body"><a href="#">{!!$setting->addr!!}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- RD Google Map-->
  <section class="section">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe style="width:100%;height:100%;" id="gmap_canvas" src="{{$setting->mapurl}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            {{-- <a href="https://123movies-to.org"></a> --}}
            <br>
            <style>
            .mapouter{position:relative;text-align:right;height:500px;width:100%;}
            </style>
            {{-- <a href="https://www.embedgooglemap.net">google map coding</a> --}}
            <style>
            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}
            </style>
        </div>
    </div>
  </section>
@endsection