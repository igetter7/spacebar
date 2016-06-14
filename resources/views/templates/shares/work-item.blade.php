<div class="col-md-4">
	<a href="{{ url('@user/works/test') }}">
		<div class="item">		
			<div class="thumbail">
				<div class="cover">
					<img src="{{ asset('assets/img/plus.png') }}">
				</div>
			</div>
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
	</a>
</div>