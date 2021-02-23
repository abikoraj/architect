<style>
    .all{
        transition: all 1s ;
        height:100%;
    }
    .cbed{
        position: fixed;
        left:-200vw;
        top:-200vw;
        height: 0px;
        width: 0px;
    }
    .button-group-area{
        padding:15px 0px;
        margin-bottom: 25px;
    }
    .genric-btn{
        background:none;
        border:none;
        outline: transparent;
        font-weight:700;
        font-size:1.2rem;
        display: inline-block;
        cursor: pointer;
        padding: 5px 10px;
    }

    .genric-btn:hover{
        border-bottom: 2px solid #E09B24;
    }
    .genric-btn.active{
        border-bottom: 2px solid #E09B24;
    }
</style>
<!-- Production-->
<section class="section section-md bg-default text-center">
    <div class="container">
      <h2>Our Works</h2>
      <div class="button-group-area">
        <button id="all" class="genric-btn primary active" onclick="filter('all')">ALL WORKS</button>
        @foreach (App\Models\Gallary::select('category')->distinct()->get() as $item)
        <button id="{{$item->category}}" class="genric-btn primary" onclick="filter('{{ $item->category }}')">{{ $item->category }}</button>
        @endforeach
    </div>
    <div>
        <div class="row ">
            @foreach (App\Models\Gallary::all() as $item)
            <div class="col-md-6 all mb-4 {{ $item->category }}" >
                <img src="{{asset($item->picture)}}" class="w-100" alt="">
            </div>
            @endforeach
        </div>
    </div>
    </div>
  </section>
  <script>
    function filter(cls) {
        $('.all').addClass('cbed');
        $("."+cls).removeClass('cbed');
        $('.genric-btn').removeClass('active');
        $("#"+cls).addClass('active');
    }
</script>