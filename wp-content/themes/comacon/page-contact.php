<?php
	get_header();
?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary">Contacteer ons</h1>
		<h3 class="main-title__secondary">we beantwoorden graag al uw vragen</h3>
	</div>
</div>
<div class="breadcrumbs  breadcrumbs--page-builder">
	<div class="container">
	<!-- Breadcrumb NavXT 5.2.0 -->
		<?php echo bt_breadcrumb();?>
	</div>
</div>
<div class="master-container contactPage">
	<div class="post-29 page type-page status-publish hentry container" role="main">
		<div id="pl-29">
			<div class="panel-grid" id="pg-29-0">
				<div class="siteorigin-panels-stretch panel-row-style" data-stretch-type="full-stretched" style="margin-left: -104.5px; margin-right: -104.5px; padding-left: 0px; padding-right: 0px; border-left-width: 0px; border-right-width: 0px;"><div class="panel-grid-cell" id="pgc-29-0-0" style="padding-left: 0px; padding-right: 0px;">
					<div class="panel widget widget_pt_google_map panel-first-child panel-last-child" id="panel-29-0-0-0">	
						<div class="simple-map  js-where-we-are" data-latlng="51.2140835,4.3980999" data-markers="[{&quot;title&quot;:&quot;COMACON&quot;,&quot;locationlatlng&quot;:&quot;51.2176047,4.4103742&quot;,&quot;custompinimage&quot;:&quot;http:\/\/comacon.be\/wp-content\/themes\/comacon\/images\/map_pin.png&quot;,&quot;id&quot;:&quot;1&quot;}]" data-zoom="12" data-type="roadmap" data-style="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:65},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:30},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-100}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffff00&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-97}]}]" style="height: 380px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
                        </div>
				</div>
				</div>
			</div>
			<div class="panel-grid" id="pg-29-1">
				<div class="panel-grid-cell" id="pgc-29-1-0">
					<div class="panel widget widget_text panel-first-child" id="panel-29-1-0-0">	
						<div class="textwidget"></div>
					</div>
					<div class="panel widget widget_text panel-last-child" id="panel-29-1-0-1">
						<h3 class="widget-title">Stuur ons een bericht</h3>	
						<div class="textwidget"></div>
					</div>
				</div>
			</div>
			<div class="panel-grid" id="pg-29-2">
				<div class="panel-grid-cell col-md-3 pad-left-0" id="pgc-29-2-0">
					<div class="panel widget widget_text panel-first-child" id="panel-29-2-0-0">	
						<div class="textwidget">
							<span class="icon-container">
								<span class="fa fa-home"></span>
							</span> 
							<b class="t-big"><?php echo get_option('url_company');?></b><br>
							<span class="pad-top-10"><?php echo get_option('url_address');?></span><br><br>
							<span class="icon-container"><span class="fa fa-phone"></span></span> 
							<b class="t-big"><?php echo get_option('url_phone');?></b><br>
							
							<span class="icon-container"><span class="fa fa-envelope"></span></span> 
							<a class="mailto" href="mailto:<?php echo get_option('url_email');?>"><?php echo get_option('url_email');?><script cf-hash="f9e31" type="text/javascript">
		/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a><br><br>
							<span class="icon-container"><span class="fa fa-home"></span></span> <b><?php echo get_option('url_open');?></b><br>
							<?php echo get_option('url_day');?>
						</div>
					</div>
					<div class="panel widget widget_pt_social_icons panel-last-child pad-top-10" id="panel-29-2-0-1">
						<?php
							$fb = get_option('url_facebook');
							$tw = get_option('url_twitter');
							$lk = get_option('url_likedin'); 
						?>	
						<a class="social-icons__link" href="<?php if(!empty($fb)) echo $fb; else echo 'javascript:void(0);'?>" target="_blank"><i class="fa  fa-facebook"></i></a>
						<a class="social-icons__link" href="<?php if(!empty($lk)) echo $lk; else echo 'javascript:void(0);'?>" target="_blank"><i class="fa  fa-linkedin "></i></a>
					</div>
				</div>
				<div class="panel-grid-cell col-md-9" id="pgc-29-2-1">
					<div class="panel widget widget_text panel-first-child panel-last-child" id="panel-29-2-1-0">	<div class="textwidget"><div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
						<div class="screen-reader-response"></div>
						<?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form"]' ); ?>
					</div>
				</div>
			   </div>
			</div>
		</div>
		</div>
	</div><!-- /container -->
</div>
<?php
	get_footer();
?>