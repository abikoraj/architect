@extends('layouts.admin.layout')
@section('title', 'setting')
@section('content')
        <link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"> 
        <style>
            td{
                padding:5px;
            } 
            td:nth-child(1) {
                width:30%;
            }  
        </style>   
        <h2>Settings</h2>
        <form action="{{ route('setting') }}" method="POST" class="form-contact" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <!-- Home page Setting -->
                    <div class="card shadow p-3 my-3">
                        <div class="card-title text-center">
                            <h2>
                                <strong>
                                    Homepage
                                </strong> 
                            </h2>
                        </div>
                        <hr>
                        <div class="card-body  p-0">
                            <table class="w-100">
                                <tr>
                                    <td class="text-right">About Title</td><td><input type="text" name="frontabouttitle" id="frontabouttitle" class="form-control" placeholder="About Title" value="{{$setting->frontabouttitle}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">About Text</td><td><input type="text" name="frontabouttext" id="frontabouttext" class="form-control" placeholder="About Text" value="{{$setting->frontabouttext}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">About Video</td><td><input type="url" name="frontvideo" id="frontvideo" class="form-control" placeholder="About Video Link" value="{{$setting->frontvideo}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">About Video Image</td>
                                        <td>
                                            @if ($setting->frontvideoimage!=null)
                                                <input type="file" class="dropify" name="frontvideoimage" accept="images/*" data-default-file="{{asset($setting->frontvideoimage)}}"/>
                                            @else
                                                <input type="file" class="dropify" name="frontvideoimage" accept="images/*" />
                                            @endif
                                        </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Contact page Setting -->

                    <div class="card shadow p-3 my-3">
                        <div class="card-title text-center">
                            <h2>
                                <strong>
                                    Contact
                                </strong> 
                            </h2>
                        </div>
                        <hr>
                        <div class="card-body  p-0">
                            <table class="w-100">
                                <tr>
                                    <td class="text-right">Quote</td><td><input type="text" name="contact_quote" id="contact_quote" class="form-control" placeholder="Quote" value="{{$setting->contact_quote}}"></td>
                                </tr>

                                <tr>
                                    <td class="text-right">Phone</td><td><input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="{{$setting->phone}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Address</td><td><input type="text" name="addr" id="addr" class="form-control" placeholder="Address" value="{{$setting->addr}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Email</td><td><input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$setting->email}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Facebook Url</td><td><input type="url" name="fb" id="fb" class="form-control" placeholder="Facebook Url" value="{{$setting->fb}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Instagram Url</td><td><input type="url" name="insta" id="insta" class="form-control" placeholder="Instagram Url" value="{{$setting->insta}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Twitter Url</td><td><input type="url" name="twitter" id="twitter" class="form-control" placeholder="Twitter Url" value="{{$setting->twitter}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Google Map Url</td><td><input type="url" name="mapurl" id="mapurl" class="form-control" placeholder="Google Map Url" value="{{$setting->mapurl}}"></td>
                                </tr>
                                
                              
                            </table>
                        </div>
                    </div>

                        <!-- Service page Setting -->

                        <div class="card shadow p-3 my-3">
                            <div class="card-title text-center">
                                <h2>
                                    <strong>
                                        Service
                                    </strong> 
                                </h2>
                            </div>
                            <hr>
                            <div class="card-body  p-0">
                                <table class="w-100">
                                    <tr>
                                        <td class="text-right">Quote</td><td><input type="text" name="service_quote" id="service_quote" class="form-control" placeholder="Quote" value="{{$setting->service_quote}}"></td>
                                    </tr>
                                    
                               
                                </table>
                            </div>
                        </div>

                             <!-- About page Setting -->

                             <div class="card shadow p-3 my-3">
                                <div class="card-title text-center">
                                    <h2>
                                        <strong>
                                            About Page
                                        </strong> 
                                    </h2>
                                </div>
                                <hr>
                                <div class="card-body  p-0">
                                    <table class="w-100">
                                        <tr>
                                            <td class="text-right">Cta Title</td><td><input type="text" name="contact_cta_title" id="contact_cta_title" class="form-control" placeholder="Cta Title" value="{{$setting->contact_cta_title}}"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">CTA Text</td><td><input type="text" name="contact_cta_text" id="contact_cta_text" class="form-control" placeholder="Cta Text" value="{{$setting->contact_cta_text}}"></td>
                                        </tr>
                                        <td class="text-right">CTA Image</td>
                                        <td>
                                            @if ($setting->contact_cta_image!=null)
                                                <input type="file" class="dropify" name="contact_cta_image" accept="images/*" data-default-file="{{asset($setting->contact_cta_image)}}"/>
                                            @else
                                                <input type="file" class="dropify" name="contact_cta_image" accept="images/*" />
                                            @endif
                                        </td>
                                    </tr>
                                   
                                    </table>
                                </div>
                            </div>

                        <!-- all page Setting -->

                        <div class="card shadow p-3 my-3">
                            <div class="card-title text-center">
                                <h2>
                                    <strong>
                                        All
                                    </strong> 
                                </h2>
                            </div>
                            <hr>
                            <div class="card-body  p-0">
                                <table class="w-100">
                                    <tr>
                                        <td class="text-right">Logo</td>
                                        <td>
                                            @if ($setting->logo!=null)
                                                
                                                <input type="file" class="dropify" name="logo" accept="images/*" data-default-file="{{asset($setting->logo)}}"/>
                                            @else
                                                <input type="file" class="dropify" name="logo" accept="images/*" />
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Jumbotron</td>
                                        <td>
                                            @if ($setting->jumbotron!=null)
                                                
                                                <input type="file" class="dropify" name="jumbotron" accept="images/*" data-default-file="{{asset($setting->jumbotron)}}"/>
                                            @else
                                                <input type="file" class="dropify" name="jumbotron" accept="images/*" />
                                            @endif
                                        </td>
                                    </tr>
    
                               
                                </table>
                            </div>
                        </div>
                    
                    <div class="form-group text-center text-md-right">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
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