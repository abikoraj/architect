@extends('layouts.admin.layout')
@section('title', 'Add Gallary')
@section('content')

<form action="{{ route('gallary.submit') }}" method="post" enctype="multipart/form-data" class="shadow p-4">
    @csrf
    <div class="row">

        <div class="col-md-12 mb-4">
            <div id="images" class=" row ">
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div>
                <input accept="image/*"  required type="file" multiple name="images[]" onchange="loadImages(this);" class="forn-control" placeholder="Please Select Images">
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <input type="text" name="caption" class="form-control" required placeholder="Enter Captions" required>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary">Save Change</button>
        </div>

    </div>
</form>

<div class="p-4">
    <div class="row">
        @foreach (\App\Models\Gallary::all() as $gallery)
            <div class="col-3" style="position: relative;" id="gal-{{$gallery->id}}">
                <img src="{{asset($gallery->picture)}}" alt="" class="w-100">
                <div>
                    {{$gallery->category}}
                </div>
                <button style="position: absolute;right:5px;top:5px;" class="btn btn-danger" onclick="call('{{route('gallary.delete',['gallary'=>$gallery->id])}}');">X</button>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>

    loaders=[];


    function loadImages(ele){
        loaders=[];
        console.log(ele);
        if(ele.files && ele.files.length>0){
            for (let i = 0; i < ele.files.length; i++) {
                const element = ele.files[i];
                console.log(element);
                fr = new FileReader();
                fr.onload = function(event){
                    d=' <div class="col-3"><img src="'+ event.target.result+'" style="width:100%"></div>'
                    console.log(d);
                    $('#images').append(d);
                }
                fr.readAsDataURL(element);
            }
        }

    }

    function call(url){
        // alert(url);
        axios.get(url)
        .then(function(response){
                $('#gal-'+response.data.id).remove();
        })
    }
</script>
@endsection
