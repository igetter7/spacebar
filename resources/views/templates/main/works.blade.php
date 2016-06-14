@extends('templates.main.master')

@section('content')		
	<div id="big-img">
		<img src="{{ asset('assets/img/header-work.jpg') }}" class="img-responsive">
	</div>
	<div id="caption-big-img">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>สมัครสมาชิก วันนี้ - 31 สิงหาคม 2559 ลุ้นรับสิทธิ์ได้ชื่อเว็บ .com ฟรี!</h2>					
				</div>
				<div class="col-md-4 text-center">
					<button class="sp-btn" id="btn2">CLICK</button>
				</div>
			</div>
		</div>
	</div>
	<section class="sp-section" id="main_item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<div class="section-header">
							<div class="text-center">
								<img src="{{ asset('assets/img/circle.png') }}" alt="">
								<h2 class="grey">3000</h2>
								<h1>WORKS</h1>
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
				<?php
					$items = ['Fashion','Photography','Web Design','Photography','Photography','Web Design','Photography','Photography','Web Design'];
				?>
				@for($i = 0;$i<sizeof($items);$i++)
					@include('templates.shares.work-item')
				@endfor				
			</div>
		</div>		
	</section>		
@endsection