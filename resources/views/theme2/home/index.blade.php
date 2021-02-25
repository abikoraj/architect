@extends('theme2.app')
@section('content')
    
        @include('theme2.home.slider')
        @include('theme2.home.about')
        @include('theme2.home.work')
        <div></div>
  
@endsection
@section("js")
        <script src="{{asset('grid/jquery.masonryGrid.js')}}"></script>
        <script>
                $(function(){
                        $('.my-masonry-grid').masonryGrid({
                        'columns': 2
                        });  
                });

        </script>
@endsection