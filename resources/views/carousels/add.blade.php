@extends('layouts.admin.layout')

@section('title','Carousal')
@section('content')

<div class="col-md-8 col-lg-9 offset-md-4">
    <h2>Add Carousel</h2>
    <form action="{{ route('carousel.submit') }}" method="POST" class="form-contact" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-5">
                <div class="form-group">
                    <input class="form-control" name="image" type="file" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="title" type="text" placeholder="Enter Title" required maxlength="30">
                </div>
                <div class="form-group">
                    <input class="form-control" name="description" type="text" placeholder="Enter Description" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="btn_title" type="text" placeholder="Enter Button Title">
                </div>
                <div class="form-group">
                    <input class="form-control" name="btn_link" type="text" placeholder="Enter Button Link">
                </div>
                <div class="form-group text-center text-md-right">
                    <button type="submit" class="btn active btn--leftBorder">Save Carousel</button>
                </div>
            </div>
        </div>
    </form>
</div>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>#id</th>
            <th>Image</th>
            <th>Title</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach (App\Models\Herocarousel::all() as $item)
            <tr>
                <form action="{{ route('projects.edit', ['project' => $item->id]) }}" method="POST">
                    @csrf
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        <img src="{{ asset($item->image) }}" style="max-width:350px;" alt="">
                    </td>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        <a href="{{ route('carousel.edit', ['carousel' => $item->id]) }}" class="btn btn-primary"> Edit</a>
                        <a href="{{ route('carousel.delete', ['carousel' => $item->id]) }}" class="btn btn-danger"> Delete</a>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
