@extends('layouts.admin.layout')
@section('title', 'About Blocks')
@section('content')
<div class="py-3">
    <a href="{{route('about.add')}}" class="btn btn-primary">Add New About Block</a>
</div>
@foreach ($about as $item)
    
<div class="card shadow my-3 p-3">
    <div class="row">
        <div class="col-6">
            <h3>{{$item->title}}</h3>
            <div>{!! $item->desc !!}</div>
        </div>
        @if ($item->multiple==1)
            <div class="col-3">
                <img src="{{asset($item->image1)}}" class="w-100" alt="">
            </div>
            <div class="col-3">
                <img src="{{asset($item->image2)}}" class="w-100" alt="">
            </div>
        @else
            <div class="col-6">
                <img src="{{asset($item->image1)}}" class="w-100" alt="">
            </div>
        @endif
    </div>
    <hr>
    <a href="{{route('about.delete',['about'=>$item->id])}}" class="btn btn-danger">Delete</a>
    <a href="{{route('about.edit',['about'=>$item->id])}}" class="btn btn-primary">Edit</a>
</div>
@endforeach
@endsection