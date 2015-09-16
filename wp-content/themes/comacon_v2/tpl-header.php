<?php
	$curlang = pll_current_language();
?>
<script type="text/javascript">
	var HOMEURL = "<?php echo home_url();?>";
	var BLOGHOME = "<?php echo site_url();?>";
	var LANG = "<?php echo $curlang;?>";
</script>
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12  col-md-6">
				<div class="top__left">
				<?php
					if($curlang == "en") {
						echo get_field('header_title_en','option');
					}elseif($curlang == "es") {
						echo get_field('header_title_es','option');
					}else{
						echo get_field('header_title_nl','option');
					}
				?>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function(){
					var langAttr = {
					    "nl":"Dutch",
					    "en":"English",
					    "es":"Spanish"
					};
					jQuery('.ulSelect li.selected a.aselected').attr({'data-lang':LANG}).text(langAttr[LANG]);
					jQuery('.ulLanguage li').each(function(){
						var datalang =jQuery(this).find('a').attr('data-lang');
						if(LANG == 'nl'){
							jQuery('.ulLanguage li.li1 a').attr({'href':'http://comacon.be/en','data-lang':'en'}).text(langAttr['en']);
							jQuery('.ulLanguage li.li2 a').attr({'href':'http://comacon.be/es','data-lang':'es'}).text(langAttr['es']);
						}
						if(LANG == 'en'){
							jQuery('.ulLanguage li.li1 a').attr({'href':'http://comacon.be/nl','data-lang':'nl'}).text(langAttr['nl']);
							jQuery('.ulLanguage li.li2 a').attr({'href':'http://comacon.be/es','data-lang':'es'}).text(langAttr['es']);
						}
						if(LANG == 'es'){
							jQuery('.ulLanguage li.li1 a').attr({'href':'http://comacon.be/nl','data-lang':'nl'}).text(langAttr['nl']);
							jQuery('.ulLanguage li.li2 a').attr({'href':'http://comacon.be/en','data-lang':'en'}).text(langAttr['en']);
						}
					});
				});
			</script>
			<div class="col-xs-12  col-md-6">
				<div class="pull-right divstyleSelect">
					<ul class="ulSelect">
						<li class="selected">
							<a class="aselected" data-lang="<?php echo $curlang;?>" href="javascript:void(0)">Dutch</a>
							<ul class="ulLanguage">
								<li class="li1"><a data-lang="" href="">English</a></li>
								<li class="li2"><a data-lang="" href="">Spanish</a></li>
							</ul>
						</li>
					</ul>
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