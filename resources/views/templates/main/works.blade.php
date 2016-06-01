@extends('templates.main.master')

@section('content')		
	<div id="big-img">
		<img src="{{ asset('assets/img/slide.jpg') }}" class="img-responsive">
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
					<div class="filter section-header">
						<h3>SELECTED WORK : <span class="active">This Week</span> <span>All</span> </h3>
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