<!-- Experience since 1999-->
@php
    $setting=\App\Models\Setting::first();

@endphp
<section class="section section-md bg-gray-4">
    <div class="container">
      <div class="row row-50 justify-content-md-center justify-content-lg-between align-items-lg-center">
        <div class="col-md-10 col-lg-6 col-xl-5 wow fadeInLeftSmall">
          <div class="block-wrap-1">
            <h2>{{$setting->frontabouttitle}}</h2>
            <p>
                {{$setting->frontabouttext}}
            </p><a class="button button-darker" href="{{route('theme2.about')}}">read more</a>
          </div>
        </div>
        <div class="col-md-10 col-lg-6 col-xl-7 d-flex wow fadeInRightSmall">
          <div class="thumb-video thumb-video_bordered"><img class="thumb-video__image" src="images/video-preview-962x465.jpg" alt="" width="962" height="465"/>
            <div class="thumb-video__caption"><a class="thumb-video__button" href="{{$setting->frontvideo}}" data-lightgallery="item"></a>
              <h4 class="thumb-video__title">Video Presentation</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>