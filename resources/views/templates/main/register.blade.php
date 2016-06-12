@extends('templates.main.master')

@section('css')
<link rel="stylesheet" href="{{ elixir('assets/css/register.css') }}">
@endsection

@section('content')	
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
		<form action="{{ url('register') }}" method="POST" class="form-horizontal bucket-form">
			<div class="row">
				<div class="col-md-12">
					<div class="row">					
						{{ csrf_field() }}
						<div class="col-md-8">							
							<div class="form-group">
								<label for="sel1" class="col-sm-3 control-label">CATEGORY</label>
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
								<label class="col-sm-3 control-label">EMAIL</label>
								<div class="col-sm-6">
									<input type="email" name="email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">PASSWORD</label>
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
									<input type="checkbox" name="other_skill[]" value="ชื่อ"> <span>ชื่อ</span>
									<input type="checkbox" name="other_skill[]" value="test"> <span>test</span>
									<span class="help-block">* SKILL อาชีพอื่นๆ (งานอื่นๆ)</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">DESCRIPTION <span class="badge">C</span></label>
								<div class="col-sm-6">
									<textarea class="form-control"> </textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">PROFILE PICTURE<span class="badge">D</span></label>
								<div class="col-sm-6">
									<img src="{{ asset('assets/img/file-img.jpg') }}" id="file-img">img best size 270 x 250 px
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">FIRST NAME</label>
								<div class="col-sm-6">
									<input type="text" name="first_name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">LAST NAME</label>
								<div class="col-sm-6">
									<input type="text" name="last_name" class="form-control">
								</div>
							</div>								
							<div class="form-group">
								<label class="col-sm-3 control-label">DATE OF BIRTH</label>
								<div class="col-sm-6">
									<input type="text" class="form-control">
								</div>
							</div>								
							<div class="form-group">
								<label class="col-sm-3 control-label">TEL</label>
								<div class="col-sm-6">
									<input type="text" class="form-control">
								</div>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="sample-profile">
								<h1>ตัวอย่าง PROFILE สมาชิก</h1>
								<div class="user-card">
									<div class="user-photo rel">
										<span class="badge abs" style="top:20px;left:20px;">D</span>
									</div>
									<div class="user-info">
										<div class="user-name rel"><span class="badge abs" style="left:30px;">A</span>Jenifir White</div>
										<div class="user-skill rel"><span class="badge abs" style="left:30px;">B</span>FOUNDER</div>
										<div class="user-detail rel"><span class="badge abs" style="top:20px;left:30px;">C</span>Lorem impus dolor sit ametedt consectetur adtup</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 center register-button-box">
						<button class="btn main-btn register-button" type="submit">Sign up</button>
					</div>				
				</div>
			</form>
		</div>
	</section>
</div>
@endsection

@section('js')

@endsection