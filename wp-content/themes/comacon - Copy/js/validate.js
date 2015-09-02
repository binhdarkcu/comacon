(
	function(b)
		{jQuery(document).ready(function(b){
			
			b('form.form-newsletter').submit(function(){
				b('form.form-newsletter .mes-error').remove();
				b('form.form-newsletter input').removeClass('error');
				var c=false;
				b('form.form-newsletter .requiredField').each(function(){
					if(jQuery.trim(b(this).val())==''){
						var i=b(this).prev('label').text();b(this).addClass('error');
						c=true
					}
					else
					{
						if(b(this).hasClass('email')){
							var h=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
							if(!h.test(jQuery.trim(b(this).val()))){
								var labelText=b(this).prev('label').text();b(this).addClass('error');
								c=true
							}
						}
					}
				});
				if(!c){
					//b("#popup-agent .popup-container").css('z-index','1');
					b(".loading").css('display','block');
					var e=b(this).serialize();
					var d=b('.ajaxurl').val();
					
					b.ajax({
						type:'POST',
						url:d,
						data:e,
						dataType:'json',
						success:function(c){
							if(c.error==''){
								b(".loading").css('display','none');
								//b("#popup-agent .popup-container").css('z-index','10');
								b(".form-newsletter").append('<div class="contact-success"><strong>Send successful!</strong></div>')
								setTimeout(function(){
									jQuery('.form-newsletter')[0].reset();
									jQuery('.contact-success').hide();
								},1000);
							}else{
								b(".loading").css('display','none');
								alert(c.error)
							}
						}
					})
				}
				return false}
			)
		})
})(jQuery);