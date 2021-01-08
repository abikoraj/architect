<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<style>
		.text a{
			color: #262533;
			cursor: pointer;
			padding: 10px 30px;
			font-weight: bold;
			text-transform: capitalize;
			font-size: 18px;
			z-index: 3;
		}

		.text a:hover {
			color: #ffffff;
		}
    </style>

</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    {{-- JS Section --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scroll.js') }}"></script>

	<script>
		var testimonialCarousel = $('.testimonialCarousel');
		testimonialCarousel.owlCarousel({
			loop: true,
			margin: 80,
			startPosition: 2,
			nav: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				},
				1000: {
					items: 2,
					loop: true
				}
			}
		});

		var heroCarousel = $('.heroCarousel');
		heroCarousel.owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			startPosition: 1,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				}
			}
		});

		var dropToggle = $('.menu_right > li').has('ul').children('a');
		dropToggle.on('click', function () {
			dropToggle.not(this).closest('li').find('ul').slideUp(200);
			$(this).closest('li').children('ul').slideToggle(200);
			return false;
		});

		$(".toggle_icon").on('click', function () {
			$('body').toggleClass("open");
		});

	</script>
	<script>
		function filter(cls) {
			$('.all').addClass('d-none');
			$(cls).removeClass('d-none');
		}
    </script>

    {{-- JS for gallary add form
    <script>
        function triggerClick(){
            document.querySelector('#profilepic').click();
        }

        function displayImage(e){
            if (e.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e){
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script> --}}

</body>
</html>
