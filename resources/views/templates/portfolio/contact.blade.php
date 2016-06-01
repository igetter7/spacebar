@extends('templates.portfolio.master')

@section('content')
	<section class="sp-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="contact-box">
						<h2>USERNAME</h2>
						<p class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> test@gmail.com</p>
						<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> test@gmail.com</p>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="contact-form">
						<h2>Contact</h2>
						<p>MESSAGE TO USERNAME'S SPACEBAR BOX</p>
						<form id="subscribe-form" action="{{ url('subscription')}}" method="POST" enctype="multipart/form-data">
							{{  csrf_field() }}
							<div class="row">
								<div class="col-sm-6">
									<input type="text" name="first_name" placeholder="First name">
								</div>
								<div class="col-sm-6">
									<input type="text" name="last_name" placeholder="Last name">
								</div>
								<div class="col-sm-12">
									<textarea name="message" placeholder="Write message"></textarea>
								</div>
								<div class="col-sm-12">
									<div class="pull-right">
										<button class="sp-btn big">SEND MESSAGE</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>		
	</section>
@endsection