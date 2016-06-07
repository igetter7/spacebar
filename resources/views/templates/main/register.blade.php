@extends('templates.main.master')

@section('css')
	
@endsection

@section('content')
	<style>
		.center {
			text-align: center;
		}

		.register-top {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			margin-bottom: 50px;
		}

		label {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		.register-top h2 {
			color: #8C8C8C;
			font-size: 18px;
		}

		.register-top h1 {
			font-size: 24px;
		}

		input.form-control {
			border: 1px solid #44A6EA;
			border-radius: 0px;
		}

		textarea.form-control {
			border: 1px solid #44A6EA;
			border-radius: 0px;
		}

		select.form-control {
			border: 1px solid #44A6EA;
			border-radius: 0px;
		}

		.badge {
			background-color: #44A6EA;
		}

		.sample-profile {
			padding: 50px;
			border: 1px solid #000;
		}

		.sample-profile h1 {
			font-size: 26px;
			text-align: center;
			font-weight: bold;
		}

		.user-photo {
			width: 100%;
			height: 250px;
			background-color: #5B6575;
		}

		.user-card {
			background-color: #F5F5F5;
			border: 1px solid #B7B7B7;
		}

		.user-info {
			padding: 18px;
			text-align: center;
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		.user-name {
			font-weight: bold;
			font-size: 16px;
		}

		.user-skill {
			color: #23A7F5;
		}

		.user-detail {
			margin-top: 15px;
			color: #ADADAD;
		}

		.register-button {
			background-color: #00A5E4;
			width: 352px;
			border-radius: 0px;
			padding: 13px;
		}

		.register-button-box {
			margin-top: 50px;
		}

	</style>
	<div id="big-img">
		<img src="{{ asset('assets/img/slide.jpg') }}" class="img-responsive">
	</div>
	<div class="container">
	<section class="sp-section" id="main_item">
			<div class="row">
				<div class="col-md-12 register-top">
					<h2 class="center">Sign Up</h2>
					<h1 class="center">สมัครสมาชิก Spacebar</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<form method="get" class="form-horizontal bucket-form">
								<div class="form-group">
									<label for="sel1" class="col-sm-3 control-label">ประเภทสมาชิกที่เลือก</label>
									<div class="col-sm-6">
										<select class="form-control" id="sel1">
											<option>Choose</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>

								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">username</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">password</label>
									<div class="col-sm-6">
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">NAME <span class="badge">A</span></label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label for="sel1" class="col-sm-3 control-label">TOP SKILL <span class="badge">B</span></label>
									<div class="col-sm-6">
										<select class="form-control" id="sel1">
											<option>Choose</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<span class="help-block">* TOP SKILL อาชีพหลัก (งานหลัก) ที่ต้องเลือก 1 ประเภทเพื่่อแสดงใต้ชื่อ  Profile สมาชิก</span>
									</div>

								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">OTHER SKILL</label>
									<div class="col-sm-6">
										--
										<span class="help-block">* SKILL อาชีพิื่นๆ (งานอื่นๆ)</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">คำบรรยาย <span class="badge">C</span></label>
									<div class="col-sm-6">
										<textarea class="form-control"> </textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Profile Picture <span class="badge">D</span></label>
									<div class="col-sm-6">
										img best size 270 x 250 px
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">ชื่อ</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">สกุล</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Surname</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Date of birth</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tel</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>


							</form>
						</div>
						<div class="col-md-4">
							<div class="sample-profile">
								<h1>ตัวอย่าง PROFILE สมาชิก</h1>
								<div class="user-card">
									<div class="user-photo"></div>
									<div class="user-info">
										<div class="user-name">Jenifir White</div>
										<div class="user-skill">FOUNDER</div>
										<div class="user-detail">Lorem impus dolor sit ametedt consectetur adtup</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 center register-button-box">
						<button class="btn btn-info register-button" type="submit">Sign up</button>
					</div>

				</div>
			</div>
	</section>
		
	</div>
@endsection

@section('js')
	
@endsection