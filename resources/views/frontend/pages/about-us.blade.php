@extends('frontend.layouts.master')

@section('title','Hagemaru AutoParts')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>Hagemaru Autoparts</span></h3>
							<br>
							<div class="row">
								<div class="col-lg-3 col-12 text-center">
									<svg fill="#f7941d" width="100px" height="100px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 23.6641 52.3985 C 26.6407 55.375 29.3594 55.3516 32.3126 52.3985 L 35.9219 48.8125 C 36.2969 48.4610 36.6250 48.3203 37.1172 48.3203 L 42.1797 48.3203 C 46.3749 48.3203 48.3204 46.3985 48.3204 42.1797 L 48.3204 37.1172 C 48.3204 36.625 48.4610 36.2969 48.8124 35.9219 L 52.3749 32.3125 C 55.3749 29.3594 55.3514 26.6407 52.3749 23.6641 L 48.8124 20.0547 C 48.4610 19.7031 48.3204 19.3516 48.3204 18.8829 L 48.3204 13.7969 C 48.3204 9.625 46.3985 7.6563 42.1797 7.6563 L 37.1172 7.6563 C 36.6250 7.6563 36.2969 7.5391 35.9219 7.1875 L 32.3126 3.6016 C 29.3594 .6250 26.6407 .6485 23.6641 3.6016 L 20.0547 7.1875 C 19.7032 7.5391 19.3516 7.6563 18.8828 7.6563 L 13.7969 7.6563 C 9.6016 7.6563 7.6563 9.5782 7.6563 13.7969 L 7.6563 18.8829 C 7.6563 19.3516 7.5391 19.7031 7.1876 20.0547 L 3.6016 23.6641 C .6251 26.6407 .6485 29.3594 3.6016 32.3125 L 7.1876 35.9219 C 7.5391 36.2969 7.6563 36.625 7.6563 37.1172 L 7.6563 42.1797 C 7.6563 46.3750 9.6016 48.3203 13.7969 48.3203 L 18.8828 48.3203 C 19.3516 48.3203 19.7032 48.4610 20.0547 48.8125 Z M 26.2891 49.7734 L 21.8828 45.3438 C 21.3672 44.8047 20.8282 44.5938 20.1016 44.5938 L 13.7969 44.5938 C 11.7110 44.5938 11.3828 44.2656 11.3828 42.1797 L 11.3828 35.875 C 11.3828 35.1719 11.1719 34.6329 10.6563 34.1172 L 6.2266 29.7109 C 4.7501 28.2109 4.7501 27.7891 6.2266 26.2891 L 10.6563 21.8829 C 11.1719 21.3672 11.3828 20.8282 11.3828 20.1016 L 11.3828 13.7969 C 11.3828 11.6875 11.6876 11.3829 13.7969 11.3829 L 20.1016 11.3829 C 20.8282 11.3829 21.3672 11.1953 21.8828 10.6563 L 26.2891 6.2266 C 27.7891 4.7500 28.2110 4.7500 29.7110 6.2266 L 34.1172 10.6563 C 34.6328 11.1953 35.1719 11.3829 35.8750 11.3829 L 42.1797 11.3829 C 44.2657 11.3829 44.5938 11.7109 44.5938 13.7969 L 44.5938 20.1016 C 44.5938 20.8282 44.8282 21.3672 45.3439 21.8829 L 49.7733 26.2891 C 51.2498 27.7891 51.2498 28.2109 49.7733 29.7109 L 45.3439 34.1172 C 44.8282 34.6329 44.5938 35.1719 44.5938 35.875 L 44.5938 42.1797 C 44.5938 44.2656 44.2657 44.5938 42.1797 44.5938 L 35.8750 44.5938 C 35.1719 44.5938 34.6328 44.8047 34.1172 45.3438 L 29.7110 49.7734 C 28.2110 51.2500 27.7891 51.2500 26.2891 49.7734 Z M 24.3438 39.2266 C 25.0235 39.2266 25.5391 38.9453 25.8907 38.5234 L 38.8985 20.3360 C 39.1563 19.9609 39.2969 19.5391 39.2969 19.1407 C 39.2969 18.1094 38.5001 17.2891 37.4219 17.2891 C 36.6485 17.2891 36.2266 17.5469 35.7579 18.2266 L 24.2735 34.3985 L 18.3438 27.8594 C 17.9454 27.4141 17.5001 27.2266 16.9141 27.2266 C 15.7657 27.2266 14.9454 28.0000 14.9454 29.0782 C 14.9454 29.5469 15.1094 29.9922 15.4376 30.3203 L 22.8907 38.6172 C 23.2423 38.9922 23.6876 39.2266 24.3438 39.2266 Z"></path></g></svg>
									<br>
									<strong>High Quality Parts</strong>
									<p>Top-notch aftermarket car spare parts supplied from only the industry’s leading manufacturers.</p>
								</div>
								<div class="col-lg-3 col-12 text-center">
									<svg fill="#f7941d" width="100px" height="100px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.20951751,39.2251127 L21.2516738,49.4497822 C21.8935867,49.8165941 22.5240436,50 23.1430444,50 C23.762014,50 24.4000925,49.8165941 25.0572801,49.4497822 L43.0764305,39.2251127 C44.130948,38.6137743 44.929583,37.9221967 45.4723356,37.15038 C46.0147751,36.3785696 46.2859949,35.1749986 46.2859949,33.5396669 L46.2859949,15.3828565 C46.2859949,14.1907415 46.0606305,13.2049601 45.6099018,12.4255124 C45.15886,11.6460333 44.4519357,10.9735554 43.489129,10.4080786 L27.2581042,1.19213065 C25.8825989,0.397376884 24.514731,0 23.1545004,0 C21.7942699,0 20.4187489,0.397376884 19.0279377,1.19213065 L2.81977798,10.4080786 C1.84163394,10.9735554 1.12713494,11.6460333 0.676280962,12.4255124 C0.225426987,13.2049601 0,14.1907415 0,15.3828565 L0,33.5396669 C0,35.1749986 0.275101054,36.3785696 0.825303162,37.15038 C1.37550527,37.9221967 2.17024339,38.6137743 3.20951751,39.2251127 Z M5.27277542,36.1989667 C4.60031313,35.8168802 4.13416881,35.4157003 3.87434245,34.995427 C3.6145161,34.5751224 3.48460292,34.051651 3.48460292,33.4250128 L3.48460292,16.1164646 L21.3434159,26.3181939 L21.3434159,45.346155 L5.27277542,36.1989667 Z M41.0361785,36.1989667 L24.9426729,45.346155 L24.9426729,26.3181939 L42.8012981,16.1164646 L42.8012981,33.4250128 C42.8012981,34.051651 42.6714006,34.5751224 42.4116055,34.995427 C42.1518105,35.4157003 41.6933348,35.8168802 41.0361785,36.1989667 Z M23.1545004,23.1086763 L5.45621264,13.0903373 L12.5401196,9.03255764 L30.2384073,19.0967208 L23.1545004,23.1086763 Z M33.9293595,17.0105508 L16.1622887,6.96929974 L20.5639368,4.47043125 C22.3062539,3.47701252 24.0332963,3.47701252 25.7450641,4.47043125 L40.8527882,13.0903373 L33.9293595,17.0105508 Z" transform="translate(5 3)"></path> </g></svg>
									<br>
									<strong>Wide Product Range</strong>
									<p>We offer over 2500000 OEM-style quality auto parts to cover all your repair needs.</p>
								</div>
								<div class="col-lg-3 col-12 text-center">
									<svg fill="#f7941d" width="100px" height="100px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 27.9883 51.6719 C 28.3633 51.6719 28.9726 51.5313 29.5821 51.2031 C 42.8945 43.7266 47.4883 40.5625 47.4883 32.0078 L 47.4883 14.0781 C 47.4883 11.6172 46.4101 10.8438 44.4414 10.0000 C 41.6758 8.8516 32.7226 5.6406 29.9570 4.6797 C 29.3242 4.4687 28.6680 4.3281 27.9883 4.3281 C 27.3321 4.3281 26.6758 4.5156 26.0430 4.6797 C 23.2774 5.5234 14.3242 8.8750 11.5586 10.0000 C 9.5899 10.8203 8.5117 11.6172 8.5117 14.0781 L 8.5117 32.0078 C 8.5117 40.5625 13.1289 43.7031 26.4180 51.2031 C 27.0274 51.5313 27.6133 51.6719 27.9883 51.6719 Z M 27.9883 47.4063 C 27.6367 47.4063 27.2383 47.2656 26.5352 46.8438 C 15.7070 40.2813 12.2383 38.3594 12.2383 31.1406 L 12.2383 14.7813 C 12.2383 13.9844 12.4023 13.6797 13.0352 13.4219 C 16.5977 12.0156 23.4648 9.5781 27.0742 8.2891 C 27.4258 8.1484 27.7305 8.0781 27.9883 8.0781 C 28.2695 8.0781 28.5508 8.1484 28.9258 8.2891 C 32.5352 9.5781 39.3321 12.1797 42.9648 13.4219 C 43.5977 13.6562 43.7617 13.9844 43.7617 14.7813 L 43.7617 31.1406 C 43.7617 38.3594 40.2695 40.2578 29.4648 46.8438 C 28.7617 47.2656 28.3633 47.4063 27.9883 47.4063 Z M 25.0586 39.0860 C 25.8555 39.0860 26.4883 38.7109 26.9570 37.9609 L 38.5352 19.7500 C 38.8399 19.3047 39.1211 18.7656 39.1211 18.2500 C 39.1211 17.1719 38.1602 16.4922 37.1758 16.4922 C 36.5664 16.4922 35.9805 16.8672 35.5586 17.5703 L 24.9648 34.5156 L 19.5274 27.4609 C 18.9883 26.7813 18.4492 26.5234 17.7930 26.5234 C 16.7617 26.5234 15.9648 27.3438 15.9648 28.3984 C 15.9648 28.9141 16.1758 29.4297 16.5039 29.875 L 23.0430 37.9844 C 23.6992 38.7344 24.2852 39.0860 25.0586 39.0860 Z"></path></g></svg>
									<br>
									<strong>1 Year Warranty</strong>
									<p>Feel confident when buying from Remco as our parts are all backed with a min. of 1-year warranty.</p>
								</div>
								<div class="col-lg-3 col-12 text-center">
									<svg width="100px" height="100px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#f7941d"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_payment_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_payment_24_regular" fill="#f7941d" fill-rule="nonzero"> <path d="M19.2388849,5.0207074 C20.7014167,5.0207074 21.8972891,6.162412 21.9838661,7.60318507 L21.9888849,7.7707074 L21.9888849,16.275793 C21.9888849,17.7383249 20.8471803,18.9341973 19.4064072,19.0207742 L19.2388849,19.025793 L4.76104885,19.025793 C3.29851702,19.025793 2.10264457,17.8840884 2.01606765,16.4433154 L2.01104885,16.275793 L2.01104885,7.7707074 C2.01104885,6.30817556 3.15275345,5.11230312 4.59352652,5.02572619 L4.76104885,5.0207074 L19.2388849,5.0207074 Z M20.4880489,10.9947074 L3.51004885,10.9947074 L3.51104885,16.275793 C3.51104885,16.9230017 4.00292352,17.4553269 4.63324361,17.5193394 L4.76104885,17.525793 L19.2388849,17.525793 C19.8860935,17.525793 20.4184188,17.0339184 20.4824312,16.4035983 L20.4888849,16.275793 L20.4880489,10.9947074 Z M18.2529045,14.5 C18.6671181,14.5 19.0029045,14.8357864 19.0029045,15.25 C19.0029045,15.6296958 18.7207506,15.943491 18.3546751,15.9931534 L18.2529045,16 L15.7529045,16 C15.3386909,16 15.0029045,15.6642136 15.0029045,15.25 C15.0029045,14.8703042 15.2850584,14.556509 15.6511339,14.5068466 L15.7529045,14.5 L18.2529045,14.5 Z M19.2388849,6.5207074 L4.76104885,6.5207074 C4.11384016,6.5207074 3.58151495,7.01258206 3.51750246,7.64290216 L3.51104885,7.7707074 L3.51004885,9.4947074 L20.4880489,9.4947074 L20.4888849,7.7707074 C20.4888849,7.12349871 19.9970102,6.5911735 19.3666901,6.52716101 L19.2388849,6.5207074 Z" id="🎨-Color"> </path> </g> </g> </g></svg>
									<br>
									<strong>Safe & Secure Payment</strong>
									<p>We use advanced encryption to keep your payment and personal data safe and secure.</p>
								</div>
							</div>
							<div class="button">
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
