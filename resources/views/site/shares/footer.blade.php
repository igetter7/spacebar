	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<p class="footer-p">Subscribe to our Newsletter</p>
						<div class="text-center" id="subscribe-text">
							<div id="subscribe-thank">
								<h2>Thank For subscription</h2>
							</div>
						</div>
						<form id="subscribe-form" action="{{ url('subscription')}}" method="POST" enctype="multipart/form-data">
							<div id="subscribe-box">
								{{  csrf_field() }}
								<input type="email" name="email" required="required">
								<button type="submit"> 
									DONE
								</button>
							</div>
						</form>
						<div class="social">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</footer>
	<div id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						©  2016 SPACEBAR THAI ARTIST ONLINE SPACE
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script>
		$('#subscribe-form').submit(function(){
			var formData = {            
	            'email'             : $('input[name=email]').val(),            
	            '_token'            : $('input[name=_token]').val(),            
	        };	    
	        console.log($(this).attr('action'));    
			$.ajax({
	            type        : 'POST',
	            url         : $(this).attr('action'),
	            data        : formData,
	            dataType    : 'json',
	            encode      : true
	        }).done(function(data) {
				console.log(data);
				$('#subscribe-form').hide();
				$('#subscribe-thank').show();
	        });
	        event.preventDefault();
		});
	</script>
</body>
</html>