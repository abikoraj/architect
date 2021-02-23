<!-- Swiper-->
<section class="section swiper-slider_style-3 swiper-buttons-alternate">
    <div class="swiper-container swiper-slider swiper-slider_height-1" data-loop="true" data-autoplay="4200" data-simulate-touch="false" data-additional-slides="0" data-custom-prev="#swiper-prev" data-custom-next="#swiper-next" data-custom-slide-effect="interLeaveEffect">
      <div class="swiper-wrapper">
          @foreach (\App\Models\Herocarousel::all() as $slider)
              
            <div class="swiper-slide bg-gray-dark">
                <div class="slide-inner" style="background-image: url({{asset($slider->image)}});">
                <div class="swiper-slide-caption">
                    <div class="container">
                    <h1 data-caption-animate="fadeInUpSmall">{{$slider->title}}</h1>
                    <p class="big" style="max-width: 520px" data-caption-animate="fadeInRightSmall" data-caption-delay="300">
                        {{$slider->description}}
                    </p><a class="button button-primary" href="{{$slider->btn_link}}" data-caption-animate="fadeInRightSmall" data-caption-delay="550">{{$slider->btn_title}}</a>
                    </div>
                </div>
                </div>
            </div>
          @endforeach
        
      </div>
      <!-- Swiper pagination-->
      <div class="swiper-pagination"></div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev"><span>Prev</span></div>
      <div class="swiper-button-next"><span>Next</span></div>
    </div>
  </section>