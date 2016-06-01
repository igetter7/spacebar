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
				<a class="navbar-brand" href="#">
					<img src="{{ asset('assets/img/logo.png') }}" alt="LOGO SPACEBAR">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav main-nav">
					<li><a href="#" class="active">ผลงานทั้งหมด</a></li>					
					<li><a href="#">สมาชิกทั้งหมด</a></li>					
					<li><a href="#">บล็อก</a></li>					
					<li><a href="#">เกี่ยวกับเรา</a></li>					
					<li class="visible-sm visible-xs"><a href="#">สมัครสมาชิก</a></li>					
					<li class="visible-sm visible-xs"><a href="#">เข้าระบบ</a></li>					
				</ul>				
				<ul class="nav navbar-nav navbar-right visible-lg visible-md">
					<li><a href="#"><button id="signup-btn">สมัครสมาชิก</button></a></li>				
					<li><a href="#"><button id="login-btn">เข้าระบบ</button></a></li>				
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>