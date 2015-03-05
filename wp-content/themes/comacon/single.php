
<?php
	get_header();
?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary">Referenties</h1>
		<h3 class="main-title__secondary">BEKIJK HIER AL ONZE Referenties voor de verschillende doelgroepen</h3>
	</div>
</div>
<?php
	while ( have_posts() ) : the_post();
	$post = get_post(get_the_ID());
	$location = get_field('location',$post->ID, FALSE, FALSE); 
	$oppervalakte = get_field('oppervalakte',$post->ID, FALSE, FALSE);
	$investeeerder = get_field('investeeerder',$post->ID, FALSE, FALSE);
	$waarde = get_field('waarde',$post->ID, FALSE, FALSE);
?>
<div class="breadcrumbs">
	<div class="breadcrumbs">
		<div class="container">
			<!-- Breadcrumb NavXT 5.2.0 -->
				<a rel="nofollow" href="<?php echo bloginfo('home');?>">Home</a>
				<a rel="nofollow" href="<?php echo bloginfo('home')?>/referenties">Referenties</a>  
				<strong class="current"><?php echo get_the_title($post->ID);?></strong>
		</div>
	</div>
</div>
<div class="master-container">
	<div class="row">
		<main class="col-xs-12" role="main">
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<article class="post-225 portfolio type-portfolio status-publish has-post-thumbnail hentry post-inner">
						<h2 class="hentry__title"><?php echo get_the_title($post->ID);?></h2>
						<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="project__meta-data">
								<ul class="list-unstyled">
									<li>
										<span class="project__meta-icon"><i class="fa  fa-calendar"></i></span> 
										Construction datum: <strong><?php echo get_the_time('F Y',$post->ID)?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-map-marker"></i></span> 
										Location: <strong><?php echo $location;?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-arrows-alt"></i></span> 
										Oppervalakte: <strong><?php echo $oppervalakte;?></strong>
									</li>
									
									<li>
										<span class="project__meta-icon"><i class="fa  fa-usd"></i></span> 
										Investeeerder: <strong><?php echo $investeeerder;?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-th-list"></i></span> 
										Waarde: <strong><?php echo $waarde;?></strong>
									</li>	
								</ul>
							</div>
							<div class="hentry__content  project__content">
								<?php the_content();?>
							</div>
							<nav class="project__navigation">
								<ul class="list-unstyled">
									<li>
										<?php 
											previous_post('%', '<i class="fa fa-caret-left"></i> VORIG project', '');
										?>
									</li>
									<li>
										
										<?php 
											next_post('% ','VOLGEND PROJECT <i class="fa fa-caret-right"></i>', '');
										?>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-xs-12 col-md-6">
						<div class="project__gallery">
							<?php
								$img_list=get_post_meta(get_the_id(),'tt_logo_projects',FALSE);
				           		foreach ($img_list as $key => $img) {
				           		$img_thumb=wp_get_attachment_image_src($img ,'full');
								if($img_thumb!=''){		 
							?>
							<a href="https://demo.proteusthemes.com/buildpress/wp-content/uploads/sites/16/2014/10/project_03.jpg" data-slb-group="225" data-slb-active="1" data-slb-internal="0">
								<img width="555" height="312" src="<?php echo $img_thumb[0];?>">
							</a>
							<?php }};?>
						</div>
						</div>
						</div>
						<div class="clearfix"></div>
						</article>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<?php endwhile; ?>
<?php
	get_footer();
?>