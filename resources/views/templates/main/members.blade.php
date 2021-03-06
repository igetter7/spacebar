@extends('templates.main.master')

@section('content')		
	<div id="big-img" class="container">
		<img src="{{ asset('assets/img/header-member.jpg') }}" class="img-responsive">
	</div>
	<div id="caption-big-img">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>สมัครสมาชิก วันนี้ - 31 สิงหาคม 2559 ลุ้นรับสิทธิ์ได้ชื่อเว็บ .com ฟรี!
						{{--</div>--}}
						{{--<div class="col-md-4 text-center">--}}
						<button class="sp-btn" id="btn3">CLICK</button></h2>
				</div>
			</div>
		</div>
	</div>
	<section class="sp-section" id="main_item">
		<div class="container">
			<div class="row">				
				<div id="member">
					<div class="col-md-12">
						<div class="section-header">
							<div class="text-center">
								<i class="fa fa-user main_color_2 icon" id="member-icon" aria-hidden="true"></i>								
								<h2 class="grey">3000</h2>
								<h1>สมาชิก SPACEBAR</h1>
							</div>
						</div>
					</div>	
					<div class="col-md-12">
						<div class="filter section-header">
							<div class="row">
								<div class="col-md-3">
									<h2 class="active">ดูงานตามประเภทสมาชิก</h2>
								</div>
								<div class="col-md-3">
									<select class="form-control" id="sel1">
										<option>All</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					@for($i = 0;$i<4;$i++)				
						@include('templates.shares.member-item')
					@endfor
				</div>
			</div>
		</div>		
	</section>	
	<section class="sp-section" id="stat">
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
@endsection