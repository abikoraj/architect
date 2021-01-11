@extends('layouts.admin.layout')
@section('title', 'Add Gallary')

@section('content')
    @php
    $tags=[
    'Bed Room',
    'Kitchen',
    'Office',
    'Others'
    ]
    @endphp

    <div class="col-md-8 col-lg-9 offset-md-4">
        <h2>Add Photos to Gallary</h2>
        <form action="{{ route('gallary.submit') }}" method="POST" class="form-contact" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group text-center">
                        <img src="{{ asset('assets/img/profile_dummy.png') }}" id="profileDisplay" onclick="triggerClick()" style="cursor: pointer;">
                        <label for="picture">Gallary Image</label>
                        <input type="file" name="picture" onchange="displayImage(this)" id="profilepic"
                            style="display: none;" required>
                        <span class="text-danger">@error('picture'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" class="form-control" required>
                        {{-- @foreach ($tags as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach --}}
                        <span class="text-danger">@error('category'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group text-center text-md-right">
                        <button type="submit" class="btn active btn--leftBorder">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <hr>

    <div class="pb-3 pt-3 pl-3 pr-3">
        <div class="row gallery-item">
            @foreach (App\Models\Gallary::all() as $item)
                <div class="card mx-2 shadow col-md-4" style="width: 18rem;">
                    <form action="{{ route('gallary.edit', ['gallary' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span class="img-gal">
                            <img src="{{ asset($item->picture) }}" class="pt-3" alt="...">
                        </span>
                        <div class="card-text">
                            <label for="category" style="margin-top: 3px; margin-bottom: 0px;">Category</label>
                            <input type="text" class="form-control" name="category" placeholder="Category" required
                                value="{{ $item->category }}">
                        </div>
                        <div>
                            <input type="submit" class=" btn btn-primary" value="Update">
                            <a href="{{ route('gallary.delete', ['gallary' => $item->id]) }}" class="btn btn-danger"> Delete</a>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
