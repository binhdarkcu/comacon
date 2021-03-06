
<?php
	get_header();
?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary">Over Comacon</h1>
		<h3 class="main-title__secondary">Uw ervaren aanspreekpunt</h3>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container">
	<!-- Breadcrumb NavXT 5.2.0 -->
		<?php echo bt_breadcrumb();?>
	</div>
</div>
<div class="master-container">
	<div class="row">
		<main class="col-xs-12" role="main">
			<div class="row">
				<div class="container">
					<div class="col-md-4">
						<div class="sidebar">
							<div class="push-down-30">
								<h4 class="sidebar__headings">Waarom Comacon</h4>
                                <?php
                                $args_clients = array(
                                    'post_type' 	 => 'ta_about',
                                    'posts_per_page' => 5 ,
                                    'order'			 => 'asc'
                                );
                                $queryClients = get_posts($args_clients);
                                foreach ($queryClients as $abouts) {
                                    //print_r($abouts);
                                    $img = get_post_meta($abouts->ID,'tt_logo_about',true);
                                    $src = wp_get_attachment_image_src($img ,'full');
                                    ?>
                                    <span class="i-clock"><img src="<?php echo $src[0];?>"/></span>
                                    <h5><?php echo get_the_title($abouts->ID)?></h5>
                                    <p class="pad-bot-20">
                                        <?php echo $abouts->post_content  ?>
                                    </p>
                                <?php }?>
								<!--

								<span class="i-clock"><img src="images/i-clock.png"/></span>
								<h5>WE RESPECTEREN DEADLINES</h5>
								<p class="pad-bot-20">
									Our constructino management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>
								
								<span class="i-clock"><img src="images/i-diagram.png"/></span>
								<h5>VERBETEREING STAAT CENTRAAL</h5>
								<p class="pad-bot-20">
									Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>
								
								<span class="i-clock"><img src="images/i-star.png"/></span>
								<h5>Kwaliteit gegarandeerd</h5>
								<p class="pad-bot-20">
									Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>-->
							</div>
						</div>
					</div>
					
					<div class="col-md-8">
						<h4 class="sidebar__headings">Wie is Comacon</h4>
						<article class="post-171 page type-page status-publish hentry">
							<div class="panel-grid" id="pg-171-0">
								<div class="panel-grid-cell" id="pgc-171-0-0">
									<div class="panel widget widget_black-studio-tinymce panel-first-child panel-last-child" id="panel-171-0-0-0">
										<div class="textwidget post_content">
											<?php
												$aboutid = get_page_id_by_slug('about');
												$about = get_post($aboutid);
												$aboutContent = $about->post_content;
											?>
											<?php echo apply_filters('the_content', $aboutContent);?>
										</div>
									</div>
								</div>
								
							</div>
						</article>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>

<?php
	get_footer();
?>