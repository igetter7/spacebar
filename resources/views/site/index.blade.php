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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		
	</header>
	<div id="caption-big-img">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>สมัครสมาชิก วันนี้ - 31 สิงหาคม 2559 ลุ้นรับสิทธิ์ได้ชื่อเว็บ .com ฟรี!</h2>
				</div>
			</div>
		</div>
	</div>
	<section class="sp-section" id="main_item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="filter section-header">
						<h3>SELECTED WORK : <span class="active">This Week</span> <span>All</span> </h3>
					</div>
				</div>
				<?php
					$items = ['Fashion','Photography','Web Design','Photography','Photography','Web Design','Photography','Photography','Web Design'];
				?>
				@for($i = 0;$i<sizeof($items);$i++)
				<div class="col-md-4">
					<div class="item">
						<a href="#">
							<div class="thumbail">
								<div class="cover">
									<img src="{{ asset('assets/img/plus.png') }}">
								</div>
							</div>
						</a>
						<div class="caption">
							<div class="row">
								<div class="col-xs-6">
									<a href="#">
										<h4 class="name">
											Olivera Note
										</h4>
									</a>
									<a href="#">
										<div class="cat">
											{{ $items[$i] }}
										</div>
									</a>
								</div>
								<div class="col-xs-6">
									<div class="text-right">
										<i class="fa fa-heart-o" aria-hidden="true"></i> 200
									</div>
								</div>							
							</div>
						</div>
					</div>
				</div>
				@endfor
				<div id="member">
					<div class="col-md-12">
						<div class="section-header">
							<div class="text-center">
								<i class="fa fa-user main_color_2 icon" id="member-icon" aria-hidden="true"></i>
								<h1>สมาชิก SPACEBAR</h1>
								<a href="#"><h2 class="grey">ดูทั้งหมด ></h2></a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<a href="#">
								<div class="thumbail">
									<div class="cover">
										<img src="{{ asset('assets/img/plus.png') }}">
									</div>
								</div>
							</a>
							<div class="caption">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
											<h4 class="name">
												Olivera Note
											</h4>
											<div class="cat">
												Founder
											</div>
											<p>
												Lorem ipsum dolor sit ametetd consectetur adipiscing elit. 
											</p>
										</div>	
									</div>	
									<div class="contact">
										<div class="relative">
										Contact David  <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
											<div class="arrow-right"></div>
										</div>
									</div>												
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<a href="#">
								<div class="thumbail">
									<div class="cover">
										<img src="{{ asset('assets/img/plus.png') }}">
									</div>
								</div>
							</a>
							<div class="caption">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
											<h4 class="name">
												Olivera Note
											</h4>
											<div class="cat">
												Founder
											</div>
											<p>
												Lorem ipsum dolor sit ametetd consectetur adipiscing elit. 
											</p>
										</div>	
									</div>	
									<div class="contact">
										<div class="relative">
										Contact David  <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
											<div class="arrow-right"></div>
										</div>
									</div>												
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<a href="#">
								<div class="thumbail">
									<div class="cover">
										<img src="{{ asset('assets/img/plus.png') }}">
									</div>
								</div>
							</a>
							<div class="caption">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
											<h4 class="name">
												Olivera Note
											</h4>
											<div class="cat">
												Founder
											</div>
											<p>
												Lorem ipsum dolor sit ametetd consectetur adipiscing elit. 
											</p>
										</div>	
									</div>	
									<div class="contact">
										<div class="relative">
										Contact David  <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
											<div class="arrow-right"></div>
										</div>
									</div>												
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<a href="#">
								<div class="thumbail">
									<div class="cover">
										<img src="{{ asset('assets/img/plus.png') }}">
									</div>
								</div>
							</a>
							<div class="caption">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
											<h4 class="name">
												Olivera Note
											</h4>
											<div class="cat">
												Founder
											</div>
											<p>
												Lorem ipsum dolor sit ametetd consectetur adipiscing elit. 
											</p>
										</div>	
									</div>	
									<div class="contact">
										<div class="relative">
										Contact David  <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
											<div class="arrow-right"></div>
										</div>
									</div>												
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>	
	<section class="sp-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="row">
						<div class="col-md-4">
							<div class="text-center">
								<img src="{{ asset('assets/img/circle.png') }}" alt="">
								<div class="number">2540</div>
								<h2 class="grey">WORKS</h2>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center">
								<img src="{{ asset('assets/img/heart.png') }}" alt="">
								<div class="number">1030</div>
								<h2 class="grey">MEMBERS</h2>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center">
								<img src="{{ asset('assets/img/web.png') }}" alt="">
								<div class="number">200</div>
								<h2 class="grey">WEBSITES</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<p class="footer-p">Subscribe to our Newsletter</p>
						<div class="text-center" id="subscribe-text">
							<div id="subscribe-thank">
								<h2>Thank For subscription</h2>
							</div>
						</div>
						<form id="subscribe-form" action="{{ url('subscription')}}" method="POST" enctype="multipart/form-data">
							<div id="subscribe-box">
								{{  csrf_field() }}
								<input type="email" name="email" required="required">
								<button type="submit"> 
									DONE
								</button>
							</div>
						</form>
						<div class="social">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</footer>
	<div id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						©  2016 SPACEBAR THAI ARTIST ONLINE SPACE
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script>
		$('#subscribe-form').submit(function(){
			var formData = {            
	            'email'             : $('input[name=email]').val(),            
	            '_token'            : $('input[name=_token]').val(),            
	        };	    
	        console.log($(this).attr('action'));    
			$.ajax({
	            type        : 'POST',
	            url         : $(this).attr('action'),
	            data        : formData,
	            dataType    : 'json',
	            encode      : true
	        }).done(function(data) {
				console.log(data);
				$('#subscribe-form').hide();
				$('#subscribe-thank').show();
	        });
	        event.preventDefault();
		});
	</script>
</body>
</html>