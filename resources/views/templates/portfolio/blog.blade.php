@extends('templates.portfolio.master')

@section('content')
	<section class="sp-section" id="main_item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="filter section-header">
						<h3>LATEST POSTS: </h3>
					</div>
				</div>
				<div class="col-md-offset-2 col-md-8">
					@include('templates.portfolio.shares.post')
				</div>
			</div>				
		</div>		
	</section>
@endsection