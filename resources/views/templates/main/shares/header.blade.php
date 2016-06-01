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
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('') }}">
					<img src="{{ asset('assets/img/logo.png') }}" alt="LOGO SPACEBAR">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav main-nav">
					<li><a href="{{ url('') }}" @if(Request::is('/')) class="active" @endif>หน้าหลัก</a></li>					
					<li><a href="{{ url('works') }}" @if(Request::is('works')) class="active" @endif>ผลงานทั้งหมด</a></li>					
					<li><a href="{{ url('members') }}" @if(Request::is('members')) class="active" @endif>สมาชิกทั้งหมด</a></li>
					<li><a class="disable">หางาน</a></li>
					<li><a href="{{ url('blogs') }}" @if(Request::is('blogs')) class="active" @endif>บล็อก</a></li>					
					<li><a href="{{ url('about') }}" @if(Request::is('about')) class="active" @endif>เกี่ยวกับเรา</a></li>										
					<li class="visible-sm visible-xs"><a href="#">สมัครสมาชิก</a></li>					
					<li class="visible-sm visible-xs"><a href="#">เข้าระบบ</a></li>					
				</ul>				
				<ul class="nav navbar-nav navbar-right visible-lg visible-md">
					<li><a href="{{ url('auth/facebook') }}"><button id="signup-btn">สมัครสมาชิก</button></a></li>				
					<li><a href="#"><button id="login-btn">เข้าระบบ</button></a></li>				
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div id="news">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p><span>THAI ARTIST ONLINE SPACE</span> / ฟรี!  online portfolio สำหรับนักสร้างสรรค์งานชาวไทย</p>
				</div>
			</div>
		</div>
	</div>	