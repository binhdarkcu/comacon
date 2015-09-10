<div class="panel-grid" id="pg-7-6">
	<div class="panel-grid-cell" id="pgc-7-6-0">
		<div class="panel widget widget_text panel-first-child panel-last-child" id="panel-7-6-0-0">
			<?php
			    $curlang = pll_current_language();
			?>
			<h3 class="widget-title">
				<?php
					if($curlang == "en") {
						echo get_field('partner_title_en', 'option');
					}elseif($curlang == "es") {
						echo get_field('partner_title_es', 'option');
					}else{
						echo get_field('partner_title_nl', 'option');
					}
				?>
			</h3>	
			<div class="textwidget">
				<div class="logo-panel">
					<div class="row">
						<?php 
							$args_clients = array(
								'post_type' 	 => 'clients',
								'posts_per_page' => 6 ,
								'order'			 => 'asc'
							);
							$queryClients = get_posts($args_clients);
							foreach ($queryClients as $clients) {
								$img = get_post_meta($clients->ID,'tt_logo_clients',true);
								$src = wp_get_attachment_image_src($img ,'full');
								$link = get_post_meta($clients->ID,'tt_link_clients',true);
						?>
						<div class="col-xs-12  col-sm-2">
							<a href="<?php echo $link;?>" target="_blank"><img src="<?php echo $src[0];?>" alt="<?php echo get_the_title($clients->ID)?>" width="208" height="98"></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>