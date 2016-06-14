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