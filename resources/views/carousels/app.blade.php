<header>
    <div class="hero">
        <div class="owl-carousel owl-theme heroCarousel">
            @foreach (App\Models\Herocarousel::take(3)->get() as $item)
            <div class="item">
                <div class="hero__slide">
                    <img src="{{ asset($item->image) }}" alt="">
                    <div class="hero__slideContent text-center">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->description }}</p>
                        <a class="btn btn--leftBorder btn--rightBorder" href="{{ $item->btn_link }}">{{ $item->btn_title }}</a>
                        <span class="hero__slideContent--right"></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</header>
