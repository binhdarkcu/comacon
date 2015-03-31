
<?php
	get_header();
?>
<?php $page_id=get_queried_object(); ?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary">Diensten</h1>
		<h3 class="main-title__secondary"><?php echo $attachment_pdf = get_field('service_title', $page_id->ID);?></h3>
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
					<div class="col-md-3 pad-left-0">
						<div class="sidebar">
							<div class="push-down-30">
								<h4 class="sidebar__headings">Diensten voor wie?</h4>
								<div class="widget  widget_nav_menu">
									<div class="menu-services-menu-container">
										<?php
											$nav = array(
												'theme_location'  => 'menu_service',
												'menu'            => '',
												'container'       => '',
												'container_class' => '',
												'container_id'    => '',
												'menu_class'      => 'menu',
												'menu_id'         => 'menu-services-menu',
												'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											);
											
											wp_nav_menu( $nav );
										?>
									</div>
								</div>
								<?php 
									$attachment_pdf = get_field('pdf_file', $page_id->ID);
									if(!empty($attachment_pdf)){
								?>
								<div class="widget  widget-brochure-box  push-down-30 pad-top-25" style="display: none;">
									<h4 class="sidebar__headings">Download onze Brochure</h4>
									<a class="brochure-box" href="<?php echo $attachment_pdf['url'];?>" target="_blank">
										<i class="fa  fa-file-pdf-o"></i>
										<h5 class="brochure-box__text">VIEW PDF</h5>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-9 servicespage">
						<h4 class="sidebar__headings"><?php echo get_the_title();?></h4>
						<article class="post-171 page type-page status-publish hentry">
							<div class="panel-grid" id="pg-171-0">
								<div class="panel-grid-cell" id="pgc-52-0-0">
									<div class="col-md-8 padding-left-0">
										<div class="panel widget widget_black-studio-tinymce panel-first-child panel-last-child" id="panel-171-0-0-0">
										<div class="textwidget post_content">
											<?php
										    //TO SHOW THE PAGE CONTENTS
										    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
										        <div class="entry-content-page">
										            <?php the_content(); ?> <!-- Page Content -->
										        </div><!-- .entry-content-page -->
										
										    <?php
										    endwhile; //resetting the page loop
										    wp_reset_query(); //resetting the page query
										    ?>
										    
										</div>
									</div>
									</div>
									<?php get_sidebar('service');?>
									
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