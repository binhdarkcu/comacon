<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
			<div class="col-xs-12  col-md-4">
				<div class="widget  widget_text  push-down-30">
					<h6 class="footer__headings">OVER COMACON</h6>	
					<div class="textwidget"><img src="images/logo.png" alt="Footer Logo" width="185">
						<br><br>
						<?php echo get_option('text_for_footer')?>
						<br><br>
						<strong>
							<a href="<?php echo bloginfo('home')?>/about" class="read-more" target="_blank">MEER OVER COMACON</a>
						</strong>
					</div>
				</div>
			</div>
			<div class="col-xs-12  col-md-2">
				<div class="widget  widget_nav_menu  push-down-30">
					<h6 class="footer__headings">NAVIGATIE</h6>
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
					<h6 class="footer__headings">DIENSTEN</h6>
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
					<h6 class="footer__headings">SCHRIJF JE IN OP ONZE NWSLETTER</h6>	
					<div class="textwidget">
						<?php echo get_option('text_for_letter')?>
						<br><br>
						<div class="newsletter">
							<div class="input-prepend">
						        <span class="add-on">
						        	<i class="icon-user icon-black"></i>
						       	</span>
								<input type="text" name="email" placeholder="Jouw E-mail adres"/>
								<a class="btn  btn-primary" href="#" target="_blank">VERZENDEN</a>
						    </div>
						</div>
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
</footer>
</div><!-- end of .boxed-container -->


<script type='text/javascript' src='//maps.google.com/maps/api/js?sensor=false'></script>
<script type='text/javascript'>var BuildPressVars={"pathToTheme":""};</script>
<script src="js/orginial.js"></script>

<script>eval(mod_pagespeed_IvHxVYWT2W);</script>
<script>eval(mod_pagespeed_2NGNadrv4U);</script>
<script>eval(mod_pagespeed_dlk9SvPAug);</script>
<script>eval(mod_pagespeed_rwADZIu_BN);</script>
<script>eval(mod_pagespeed_DHY65I3jgO);</script>
<script>eval(mod_pagespeed_yPf8DQEHR2);</script>
<script>eval(mod_pagespeed_M0IsbeP2fH);</script>
<script>eval(mod_pagespeed_Q$HntTw5UC);</script>

</body>
</html>