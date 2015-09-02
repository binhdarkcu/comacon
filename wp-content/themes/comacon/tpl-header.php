<?php
	$curlang = pll_current_language();
?>
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12  col-md-6">
				<div class="top__left">
				<?php
					if($curlang == "en") {
						echo get_field('header_title_english','option');
					}elseif($curlang == "es") {
						echo get_field('header_title_spanish','option');
					}else{
						echo get_field('header_title_nl','option');
					}
				?>
				</div>
			</div>
		</div>
	</div>
</div>
<header class="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo site_url().'/'.$curlang; ?>">
				<img src="<?php echo get_field('header_logo', 'option')?>" class="img-responsive"/>
			</a>
		</div>
		<div class="header-widgets  header-widgets-desktop">
		<div class="widget  widget-icon-box phone-box">	
			<div class="icon-box">
				<i class="fa  fa-phone  fa-3x"></i>
				<div class="icon-box__text">
				<h4 class="icon-box__title"><?php echo get_field('website_phone','option');?></h4>
				<span class="icon-box__subtitle">
					<a class="__cf_email__" href="mailto:<?php echo get_field('website_email','option');?>" ><?php echo get_field('website_email','option');?></a>
				</span>
				</div>
			</div>
		</div>
		<div class="widget  widget-icon-box address-box">	
			<div class="icon-box">
				<i class="fa  fa-home  fa-3x"></i>
				<div class="icon-box__text">
					<?php
						if($curlang == "en") {
							$add = explode('<br/>',get_field('website_address_en','option'));
						}elseif($curlang == "es") {
							$add = explode('<br/>',get_field('website_address_es','option'));
						}else{
							$add = explode('<br/>',get_field('website_address_nl','option'));
						}
					?>
					<?php 
						
					?>
					<h4 class="icon-box__title"><?php echo $add[0];?></h4>
					<span class="icon-box__subtitle"><?php echo $add[1];?></span>
				</div>
			</div>
		</div>
			<?php
				$fb = get_option('url_facebook');
				$tw = get_option('url_twitter');
				$yt = get_option('url_youtube'); 
			?>
			<div class="widget  widget-social-icons">	
				<?php //if(!empty($fb)){?>
					<a class="social-icons__link" href="<?php if(!empty($fb)) echo $fb; else echo 'javascript:void(0);'?>" target="_blank"><i class="fa  fa-facebook"></i></a>
				<?php //}?>
				
				<?php //if(!empty($yt)){?>
					<a class="social-icons__link" href="<?php if(!empty($yt)) echo $yt; else echo 'javascript:void(0);'?>" target="_blank"><i class="fa  fa-linkedin-square"></i></a>
				<?php //}?>
			</div>	
		</div>
		<!-- Toggle Button for Mobile Navigation -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
			<span class="navbar-toggle__text">MENU</span>
			<span class="navbar-toggle__icon-bar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</span>
		</button>
	</div>
	<div class="sticky-offset  js-sticky-offset"></div>
	<div class="container">
		<?php get_template_part('tpl','menu');?>
	</div>
	
</header>