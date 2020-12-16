<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0",>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/bootstrap-4.1.3/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/responsive.css') }}">
        @yield('styles')
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{ asset('client/assets/img/logo_header.png')}}" alt="Easyloc" class="img-fluid">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span> </span>
					<span> </span>
					<span> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item {{ (Request::is('/')?'active':'') }}">
								<a class="nav-link" href="{{ url('/') }}">Home</a>
							</li>
							<li class="nav-item {{ (Request::is('training')?'active':'') }}">
								<a class="nav-link" href="{{ route('training') }}">Training</a>
							</li>
							<li class="nav-item {{ (Request::is('faq')?'active':'') }}">
								<a class="nav-link" href="{{ route('faq') }}">FAQ</a>
							</li>
							<li class="nav-item {{ (Request::is('checkout')?'active':'') }}">
								<a class="nav-link" href="{{ route('checkout') }}">Contact</a>
							</li>
							@if(!Auth::user())
							<li class="nav-item {{ (Request::is('login')?'active':'') }}">
								<a class="nav-link" href="{{ route('login') }}">Sign In</a>
							</li>
							@else
							<li class="nav-item {{ (Request::is('modules')?'active':'') }}">
								<a href="{{ route('course.index') }}" class="nav-link">Modules</a>
							</li>
							@endif
						</ul>
						@guest
						<a role="button" class="btn-signup" href="{{ route('checkout') }}">Sign Up</a>
						@else
						<div class="dropdown border-left pl-4">
							<div data-toggle="dropdown" class="align-items-center cursor-hand">
								<img src="{{ asset('client/assets/img/navbar/profile.png') }}" alt="" class="img-fluid rounded-circle dropdown-profile-img">
								<span class="px-2">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
								<i class="fa fa-sort-down"></i>
							</div>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="{{ route('user_profile') }}">Profile</a>
								<a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
							</div>
						</div>
						@endguest
					</div>
				</div>
			</nav>
		</header>
		@yield('content')
		<footer class="footer">
			<div class="container">
				<div class="row ftr-content">
					<div class="col-lg-5 col-md-12 col-sm-12">
						<img src="{{ asset('client/assets/img/footer/logo_ftr.png')}}" alt="" class="img-fluid logo-ftr h-35px">
						<hr class="invisible">
						<p class="white-txt-70p">Duis porta, ligula rhoncus euismod
							prettus viverra sem dolor id sem. Maecenas
						a venenatis enim quis</p>
						<hr class="invisible">
						<div class="d-flex pb-3 contact-info">
							<img src="{{ asset('client/assets/img/footer/icons/phone.png')}}" class="img-icon-ftr">
							<span><a class="white-txt-70p medium" href="">+855 5155 255255</a></span>
						</div>
						<div class="d-flex contact-info">
							<img src="{{ asset('client/assets/img/footer/icons/mail.png')}}" class="img-icon-ftr">
							<span><a class="white-txt-70p medium" href="">info@papermove.com</a></span>
						</div>
						<hr class="invisible">
					</div>
					<div class="col-lg-3 col-md-5 col-6">
						<h3 class="text-white">Navigation</h3>
						<hr class="invisible">
						<ul class="list-unstyled ftr-nav-list">
							<li><a href="" class="white-txt-70p medium">Home</a></li>
							<li><a href="" class="white-txt-70p medium">About</a></li>
							<li><a href="" class="white-txt-70p medium">Training</a></li>
							<li><a href="" class="white-txt-70p medium">FAQ</a></li>
							<li><a href="" class="white-txt-70p medium">Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-5 col-6 important-links">
						<h3 class="text-white">Important Links</h3>
						<hr class="invisible">
						<ul class="list-unstyled ftr-nav-list">
							<li><a href="" class="white-txt-70p">Other Links</a></li>
							<li><a href="" class="white-txt-70p">Privacy</a></li>
							<li><a href="" class="white-txt-70p">Profile</a></li>
							<li><a href="" class="white-txt-70p">Facebook</a></li>
							<li><a href="" class="white-txt-70p">Twitter</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-7 col-12">
						<h3 class="text-white">Get Update</h3>
						<hr class="invisible">
						<div class="input-newsletter">
							<div><input type="email" id="nl-email" class="form-control ml-1" placeholder="Email"></div>
							<div class="">
								<button type="submit" class="btn btn-light">
								<img src="{{ asset('client/assets/img/footer/icons/send-arrow.png')}}" alt="send" class="img-fluid">
								</button>
							</div>
						</div>
						<hr class="invisible">
						<div class="ftr-social d-flex">
							<div class="ftr-social-single rounded-circle">
								<i class="fab fa-facebook-f"></i>
							</div>
							<div class="ftr-social-single rounded-circle">
								<i class="fab fa-instagram"></i>
							</div>
							<div class="ftr-social-single rounded-circle">
								<i class="fab fa-twitter"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ftr-credits">
				<div class="container">
					<div class="ftr-credits-inner">
						<div>
							<ul class="list-unstyled credits-list m-0">
								<li class="d-inline">
									<a href="" class="white-txt-70p">&copy; EasyLoc</a>
								</li>
								<li class="d-inline">
									<a href="" class="white-txt-70p">2020</a>
								</li>
								<li class="d-inline">
									<a href="" class="white-txt-70p">UEA</a>
								</li>
								<li class="d-inline">
									<a href="" class="white-txt-70p">All Rights Reserved</a>
								</li>
							</ul>
						</div>
						<div>
							<ul class="list-unstyled credits-list m-0">
								<li class="d-inline">
									<a href="" class="white-txt-70p">Privacy Policy</a>
								</li>
								<li class="d-inline">
									<a href="" class="white-txt-70p">Terms and Conditions</a>
								</li>
								<li class="d-inline">
									<a href="" class="white-txt-70p">Join Us Today</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('client/vendor/popper/popper.min.js') }}"></script>
		<script src="{{ asset('client/vendor/bootstrap-4.1.3/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/main.js') }}"></script>
        @yield('scripts')
	</body>
</html>