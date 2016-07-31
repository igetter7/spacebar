<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Spacebar - Thai artist online space</title>
	<script src="https://use.fontawesome.com/009ca9b979.js"></script>
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ elixir('assets/css/main.css') }}">

	@yield('css','')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default fullwidth">
		<div class="container">

			<div class="navbar-header">
				<div class="container">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('') }}">
						<img src="{{ asset('assets/img/logo.png') }}" alt="LOGO SPACEBAR">
					</a>
				</div>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<div class="container">
					<ul class="nav navbar-nav menu-right">


						<li class="dropdown"><a class="dropdown-toggle">
								<a href="{{ url('') }}" @if(Request::is('/')) class="active" @endif>HOME</a>
								<li class="dropdown"><a class="dropdown-toggle">
										<a href="{{ url('works') }}" @if(Request::is('works')) class="active" @endif>WORK</a>
								</li>

								<li class="dropdown">
									<a class="dropdown-toggle">
										<a href="{{ url('members') }}" @if(Request::is('members')) class="active" @endif>MEMBER</i></a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle">
										<a href="job.html">JOB<i class="ti-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{{ url('jobfind') }}" @if(Request::is('jobfind')) class="active" @endif>หางาน</a></li>
											<li><a href="{{ url('jobannouncement') }}" @if(Request::is('jobannouncement')) class="active" @endif>>ประกาศหางาน</a></li>

										</ul>

								</li>

								<li class="dropdown"><a class="dropdown-toggle">Blog<i class="ti-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="{{ url('news') }}" @if(Request::is('news')) class="active" @endif>SPACEBAR NEWS</a></li>
										<li><a href="{{ url('blogs') }}" @if(Request::is('blogs')) class="active" @endif>MEMBER 's BLOG</a></li>

									</ul>
								</li>

								<li class="dropdown adjust-pos"><a class="dropdown-toggle"><a href="shop.html">Shop</i></a>

										<li class="dropdown"><a class="dropdown-toggle"><a href="contact.html">CONTACT<i class="ti-angle-down"></i></a>
												<ul class="dropdown-menu">
													<li><a href="{{ url('about') }}" @if(Request::is('about')) class="active" @endif>About Team เกี่ยวกับเรา</a></li>
													<li><a href="{{ url('contactshop') }}" @if(Request::is('contactshop')) class="active" @endif>Shop ติดต่อฝากขายสินค้า</a></li>
													<li><a href="{{ url('contactus') }}" @if(Request::is('contactus')) class="active" @endif>Contact ติดต่อเรื่องอื่นๆ  </a></li>

												</ul>


										</li>

										<li class="nav-separator"></li>
										<li class="nav-icon"><a class="popup-with-zoom-anim search" href="#search-modal"><i class="flaticon-search"></i> <span class="hidden-md">Search</span></a></li>
										<div id="search-modal" class="zoom-anim-dialog mfp-hide"><form><input type="text" id="search-modal-input" placeholder=" Start typing to search..." autocomplete="off"></form></div>

					</ul>
					</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
