@extends('layouts.admin.layout')
@section('title', 'Edit Carousel')

@section('content')
    <div class="container">
        {{-- <div class="col-md-9"> --}}
            <form action="{{ route('carousel.edit',['carousel'=>$item->id]) }}" method="POST" class="form-contact" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <img src="{{ asset('storage/' . $item->image) }}" id="profileDisplay" onclick="triggerClick()"
                        style="cursor: pointer;">
                    <input type="file" name="image" onchange="displayImage(this)" id="profilepic" style="display: none;">
                    <span class="text-danger">@error('picture'){{ $message }} @enderror</span>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="category">Title</label>
                        <input type="text" name="title" class="form-control" required value="{{ $item->title }}">
                        <span class="text-danger">@error('category'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="category">Button Title</label>
                        <input type="text" name="btn_title" class="form-control" required value="{{ $item->btn_title }}">
                        <span class="text-danger">@error('category'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="category">Button Link</label>
                        <input type="text" name="btn_link" class="form-control" required value="{{ $item->btn_link }}">
                        <span class="text-danger">@error('category'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="category">Description</label>
                        <input type="text" name="description" class="form-control" required value="{{ $item->description }}">
                        <span class="text-danger">@error('category'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="form-group text-center text-md-right">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        {{-- </div> --}}
    </div>
    <h1>Hello World</h1>
@endsection
