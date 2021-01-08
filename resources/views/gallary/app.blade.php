<section class="gallary section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 class="section-intro__title">GALLARY</h4>
            <h2 class="section-intro__subtitle bottom-border">Our Work Gallary</h2>
        </div>
        <div class="button-group-area">
            <button class="genric-btn primary" onclick="filter('.all')">ALL WORKS</button>
            @foreach (App\Models\Gallary::select('category')->distinct()->get() as $item)
            <button class="genric-btn primary" onclick="filter('.{{ $item->category }}')">{{ $item->category }}</button>
            @endforeach
        </div>
        <div>
            <div class="row gallery-item">
                @foreach (App\Models\Gallary::all() as $item)
                <div class="col-md-4 all {{ $item->category }}">
                    <a href="{{ asset('storage/' . $item->picture) }}" class="img-gal">
                        <div class="single-gallery-image" style="background: url({{ asset('storage/' . $item->picture) }});"></div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center pt-2">
            {{-- <button class="btn btn--rightBorder btn--leftBorder"><a href="{{ route('gallary') }}">Load More</a></button> --}}
            <a class="btn btn--leftBorder btn--rightBorder" href="{{ route('gallary') }}">Load More</a>
        </div>
    </div>
</section>
<script>
    function filter(cls) {
        $('.all').addClass('d-none');
        $(cls).removeClass('d-none');
    }
</script>
