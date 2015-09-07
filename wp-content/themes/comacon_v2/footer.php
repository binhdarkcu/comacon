<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
			<div class="col-xs-12  col-md-4">
				<?php
					$curlang = pll_current_language();
				?>
				
				<div class="widget  widget_text  push-down-30">
					<h6 class="footer__headings">
						<?php
							if($curlang == "en") {
								echo get_field('about_title_en','option');
							}elseif($curlang == "es") {
								echo get_field('about_title_es','option');
							}else{
								echo get_field('about_title_nl','option');
							}
						?>
					</h6>	
					<div class="textwidget"><img src="images/logo.png" alt="Footer Logo" width="185">
						<br><br>
						<?php echo get_option('text_for_footer')?>
						<br><br>
						<strong>
							<a href="<?php echo bloginfo('home')?>/about" class="read-more">MEER OVER COMACON</a>
						</strong>
					</div>
				</div>
			</div>
			<div class="col-xs-12  col-md-2">
				<div class="widget  widget_nav_menu  push-down-30">
					<h6 class="footer__headings">
						<?php
							if($curlang == "en") {
								echo get_field('navigation_title_en','option');
							}elseif($curlang == "es") {
								echo get_field('navigation_title_es','option');
							}else{
								echo get_field('navigation_title_nl','option');
							}
						?>
					</h6>
					<div class="menu-top-menu-container">
						
						<?php
							$nav = array(
								'theme_location'  => 'menu_footer',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => 'menu-top-menu-1',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							);
							
							wp_nav_menu( $nav );
						?>	
					</div>
				</div>
			</div>
			<div class="col-xs-12  col-md-2">
				<div class="widget  widget_nav_menu  push-down-30">
					<h6 class="footer__headings">
						<?php
							if($curlang == "en") {
								echo get_field('service_title_en','option');
							}elseif($curlang == "es") {
								echo get_field('service_title_es','option');
							}else{
								echo get_field('service_title_nl','option');
							}
						?>
					</h6>
					<div class="menu-top-menu-container">
						<?php
							$nav = array(
								'theme_location'  => 'menu_service',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => 'menu-top-menu-1',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							);
							
							wp_nav_menu( $nav );
						?>	
					</div>
				</div>
			</div>
			<div class="col-xs-12  col-md-4">
				<div class="widget  widget_text  push-down-30">
					<h6 class="footer__headings">
						<?php
							if($curlang == "en") {
								echo get_field('subscribe_title_en','option');
							}elseif($curlang == "es") {
								echo get_field('subscribe_title_es','option');
							}else{
								echo get_field('subscribe_title_nl','option');
							}
						?>
					</h6>	
					<div class="textwidget">
						<?php echo get_option('text_for_letter')?>
						<br><br>
						<form action="" method="post" class="form-newsletter">
							<input name="action" type="hidden" class="action" value="sub_newsletter"/>
							<div class="newsletter">
								<div class="input-prepend">
							        <span class="add-on">
							        	<i class="icon-user icon-black"></i>
							       	</span>
									<span class="fa fa-envelope"></span>      
									<?php
										if($curlang == "en") {
											$email_placeholder = get_field('email_placeholder_en','option');
										}elseif($curlang == "es") {
											$email_placeholder = get_field('email_placeholder_es','option');
										}else{
											$email_placeholder = get_field('email_placeholder_nl','option');
										}
									?>                              
									<input type="email" name="email" placeholder="<?php echo $email_placeholder;?>" class="requiredField wpcf7-text" aria-invalid="false"/>
									<?php
										if($curlang == "en") {
											$send = get_field('send_en','option');
										}elseif($curlang == "es") {
											$send = get_field('send_es','option');
										}else{
											$send = get_field('send_nl','option');
										}
									?>
									<input type="submit" class="btn  btn-primary" value="<?php echo $send;?>">
									<span class="loading" style="display: none;"><img style="width: 16px;height:16px;" src="images/ajax-loader.gif" alt=""/></span>
									<input name="ajaxurl" type="hidden" class="ajaxurl" value="<?php echo bloginfo('home').'/wp-admin/admin-ajax.php'; ?>"/>
	                      			<input name="security" type="hidden" class="action" value="<?php echo wp_create_nonce('security')?>"/>
							    </div>
							</div>
						</form>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
		<div class="footer-bottom__left">
			 © 2015 Comacon
			
		</div>
        </div>
	</div>
</footer>
</div><!-- end of .boxed-container -->


<script type='text/javascript' src='//maps.google.com/maps/api/js?sensor=false'></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script type='text/javascript'>var BuildPressVars={"pathToTheme":""};</script>
<script src="js/orginial.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>
<script>eval(mod_pagespeed_IvHxVYWT2W);</script>
</body>
</html>