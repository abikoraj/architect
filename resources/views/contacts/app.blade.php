@extends('layouts.app')

@section('content')

<header class="hero-banner project-bg">
    <div class="container">
        <h2 class="section-intro__subtitle">Contact Us</h2>
        <div class="btn-group breadcrumb">
          <a href="/" class="btn">Home</a>
          <span class="btn btn--rightBorder">Contact</span>
        </div>
    </div>
</header>

<section class="section-margin">
    <div class="container">
        <!-- google map start -->
        <div class="col-md-4 col-lg-3 mb-5 mb-md-0">
            <!-- <div id="map" style="height: 420px;"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.708536767402!2d87.28062621436358!3d26.81740767064377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef419fe70fcb39%3A0x642ebc733895ab5b!2sDharan%20Sub-Metropolitan%20City%20Office!5e0!3m2!1sen!2snp!4v1609160074401!5m2!1sen!2snp"
                width="1100" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
            <!-- <script>
                function initMap() {
                    var uluru = { lat: -25.363, lng: 131.044 };
                    var grayStyles = [
                        {
                            featureType: "all",
                            stylers: [
                                { saturation: -90 },
                                { lightness: 50 }
                            ]
                        },
                        { elementType: 'labels.text.fill', stylers: [{ color: '#A3A3A3' }] }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: { lat: -31.197, lng: 150.744 },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }

            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
            </script> -->

        </div>
        <br>
        <!-- google map end -->


        <div class="row align-items-center">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="lnr lnr-home"></i></span>
                    <div class="media-body">
                        <h3>Dharan, Nepal</h3>
                        <p>Near Metro Office</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="lnr lnr-phone-handset"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:454545654">(+977) 980 000 0000</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="lnr lnr-envelope"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">support@prarchitect.com</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <form action="#/" class="form-contact">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email"
                                    placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <textarea class="form-control different-control w-100" name="textarea" id="textarea"
                                    cols="30" rows="6" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right">
                        <button type="submit" class="btn active btn--leftBorder">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

