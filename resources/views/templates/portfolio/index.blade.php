@extends('templates.portfolio.master')

@section('content')
	<section class="sp-section" id="main_item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="filter section-header">
						<h3>LATEST WORKS: </h3>
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