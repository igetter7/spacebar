@extends('templates.main.master')

@section('content')		
	<div id="big-img" class="container">
		<img src="{{ asset('assets/img/header-blog.jpg') }}" class="img-responsive">
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
				<div class="col-md-12">
					<div class="filter section-header">
						<h3>BLOGS</h3>
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8">
					<div class="post">
						<div class="thumbnail">
							<img src="{{ asset('assets/img/mock.png') }}" alt="">
						</div>
						<div class="meta">
							<h2 class="title">Single Image Post Title here</h2>
							<div class="meta-detail">
								<span class="date">May 24, 2015</span>   |   <span class="comments">12 Comments</span>
							</div>
						</div>
						<div class="content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus expedita accusamus voluptas commodi quisquam provident assumenda optio eum sequi modi in possimus, perferendis necessitatibus repudiandae pariatur, hic numquam exercitationem distinctio!
							<br/>
							<br/>
							<a href="#">
								Read More >
							</a>
						</div>
					</div>
				</div>				
			</div>
		</div>		
	</section>		
@endsection