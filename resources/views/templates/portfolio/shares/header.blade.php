<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Spacebar - Thai artist online space</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendors/font-awesome-4.6.3/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ elixir('assets/css/profile.css') }}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="pull-left">
						<a href="{{ url('') }}"><img src="{{ asset('assets/img/logo-profile.png') }}" alt="spacebar"></a>
					</div>
					<div class="pull-right">
						<!-- <a class="notification">
							<img src="{{ asset('assets/img/world.png') }}" alt="nonification">
							<span class="badge">
								10
							</span>
						</a>  -->
						<a href="{{ url('') }}"><img src="{{ asset('assets/img/home.png') }}" alt="nonification"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="header-profile">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-md-3">
					<img src="{{ asset('assets/img/member2.png') }}" alt="sahred toy" id="profile-img">
				</div>
				<div class="col-md-offset-1 col-md-8 col-sm-offset-0 col-sm-7">
					<div class="min-profile">
						<h1>SAHRED TOY</h1>
						<h2>iLLUSTRATOR / WRITER</h2>
						<div class="social-count">
							<div class="social-digit">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 1580
							</div>
							<div class="social-digit">
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 78K
							</div>
							<button class="btn btn-default">starter</button>
						</div>
						<a href="" class="profile-header-link">WWW.SAHREDTOY.COM</a>
						<div class="follow-message-btn">
							@if(1==2)
								<button class="sp-btn">follow</button>
							@else
								<button class="sp-btn" style="background:#6FC0E6">unfollow</button>
							@endif
								<button class="sp-btn">message</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="top-bar">
		<div class="container">
			<div class="row">
				{{--<div class="col-md-4">--}}
					{{--<div class="viewer">--}}
						{{--<i class="fa fa-eye" aria-hidden="true"></i> <span>5000 views</span>--}}
						{{--<i class="fa fa-users" aria-hidden="true"></i> <span>400 followers</span>--}}
					{{--</div>--}}
				{{--</div>--}}
				<div class="col-md-8">
					<ul class="profile-menu">
						<li>
							<a href="{{ url('@user/about') }}">about</a>
						</li>
						<li>
							<a href="{{ url('@user/works') }}">works</a>
						</li>
						<li>
							<a href="{{ url('@user/blog') }}">blog</a>
						</li>
						<li>
							<a href="{{ url('@user/contact') }}">contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
