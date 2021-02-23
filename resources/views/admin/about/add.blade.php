@extends('layouts.admin.layout')
@section('title', 'Add About Block')
@section('content')
        <link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}">    
        <h2>Add About Block</h2>
        <form action="{{ route('about.add') }}" method="POST" class="form-contact" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>

                        </div>
                        <div class="col-3">
                            <div class="form-group pt-5">
                                
                                <input type="checkbox" class="" name="multiple" ><label class="pl-1" for="">Show Multiple Image </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image1</label>
                                <input type="file" class="dropify" name="img1" accept="images/*" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image2</label>
                                <input type="file" class="dropify" name="img2" accept="images/*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="desc" id="desc" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('about.list')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    

@endsection
@section('js')
    <script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>


        <script>
           
           ClassicEditor
                .create( document.querySelector( '#desc' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    {{-- <script>
        $('.dropify').dropify();

    </script> --}}
@endsection