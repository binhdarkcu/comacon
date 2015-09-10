
<?php
	get_header();
?>

<?php
	while ( have_posts() ) : the_post();
	$post = get_post(get_the_ID());
	$location = get_field('location',$post->ID, FALSE, FALSE); 
	$oppervalakte = get_field('oppervalakte',$post->ID, FALSE, FALSE);
	$investeeerder = get_field('investeeerder',$post->ID, FALSE, FALSE);
	$waarde = get_field('waarde',$post->ID, FALSE, FALSE);

        $radio_services_01 = get_post_meta($post->ID,'tt_radio_services_01',true);
        $radio_services_02 = get_post_meta($post->ID,'tt_radio_services_02',true);
        $radio_services_03 = get_post_meta($post->ID,'tt_radio_services_03',true);
        $radio_services_04 = get_post_meta($post->ID,'tt_radio_services_04',true);
        $radio_services_05 = get_post_meta($post->ID,'tt_radio_services_05',true);
        $radio_services_06 = get_post_meta($post->ID,'tt_radio_services_06',true);
?>
<?php
	$curlang = pll_current_language();
	if($curlang == "en") {
		$reftitl = get_field('reference_title_en','option');
		$introref= get_field('reference_title_page_en',get_page_id_by_slug('references'));
	}elseif($curlang == "es") {
		$reftitl = get_field('reference_title_es','option');
		$introref= get_field('reference_title_page_es',get_page_id_by_slug('referencias'));
	}else{
		$reftitl = get_field('reference_title_nl','option');
		$introref= get_field('reference_title_page_nl',get_page_id_by_slug('referenties'));
	}
?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary"><?php echo $reftitl;?></h1>
		<h3 class="main-title__secondary"><?php echo $introref;?></h3>
	</div>
</div>
<div class="breadcrumbs">
	<div class="breadcrumbs">
		<div class="container">
			<!-- Breadcrumb NavXT 5.2.0 -->
				<a rel="nofollow" href="<?php echo bloginfo('home');?>">Home</a>
				<a rel="nofollow" href="<?php echo bloginfo('home')?>/referenties"><?php echo $reftitl;?></a>  
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
							<div class="project__meta-data project_detail_box">
								<ul class="list-unstyled">
									<li>
										<span class="project__meta-icon"><i class="fa  fa-calendar"></i></span> 
										Startdatum werkzaamheden: <strong><?php echo get_the_time('F Y',$post->ID)?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-map-marker"></i></span> 
										Bouwplaats: <strong><?php echo $location;?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-arrows-alt"></i></span>
                                        Oppervlakte: <strong><?php echo $oppervalakte;?></strong>
									</li>
									
									<li>
										<span class="project__meta-icon"><i class="fa  fa-user"></i></span> 
										Klant: <strong><?php echo $investeeerder;?></strong>
									</li>
									<li>
										<span class="project__meta-icon"><i class="fa  fa-th-list"></i></span> 
										Partners: <strong><?php echo $waarde;?></strong>
									</li>	
								</ul>
							</div>
							<div class="hentry__content  project__content">
								<h2 class="hentry__title clear font20">Onze diensten</h2>
								<div class="choose-projecttype">
									<ul>
                                        <!--service 1-->
                                        <?PHP
                                            if($radio_services_01){
                                        ?>
                                        <li>
                                            <img src="images/s-question.png"/>

                                                    <div class="desc"><a href="<?php echo bloginfo('home')?>/services/#Haalbaarheid">HAALBAARHEID</a></div>
                                        </li>
                                        <?PHP
                                            }
                                        ?>

                                        <!--service 2-->
                                        <?PHP
                                        if($radio_services_02){
                                            ?>
                                            <li>
                                                <img src="images/s-pen.png"/>
                                                <div class="desc d02"><a href="<?php echo bloginfo('home')?>/services/#Ontwerp">ONTWERP</a></div>
                                            </li>
                                        <?PHP
                                        }
                                        ?>

                                        <!--service 3-->
                                        <?PHP
                                        if($radio_services_03){
                                            ?>
                                            <li>
                                                <img src="images/s-book.png"/>
                                                <div class="desc d03"><a href="<?php echo bloginfo('home')?>/services/#Prijsaanvragen">PRIJSAANVRAGEN</a></div>
                                            </li>
                                        <?PHP
                                        }
                                        ?>

                                        <!--service 4-->
                                        <?PHP
                                        if($radio_services_04){
                                            ?>
                                            <li>
                                                <img src="images/s-note.png"/>
                                                <div class="desc d04"><a href="<?php echo bloginfo('home')?>/services/#Bestelling">BESTELLING</a></div>
                                            </li>
                                        <?PHP
                                        }
                                        ?>

                                        <!--service 5-->
                                        <?PHP
                                        if($radio_services_05){
                                            ?>
                                            <li>
                                                <img src="images/s-hat.png"/>
                                                <div class="desc d05"><a href="<?php echo bloginfo('home')?>/services/#Uitvoering">UITVOERING</a></div>
                                            </li>
                                        <?PHP
                                        }
                                        ?>

                                        <!--service 6-->
                                        <?PHP
                                        if($radio_services_06){
                                            ?>
                                            <li>
                                                <img src="images/s-euro.png"/>
                                                <div class="desc d06"><a href="<?php echo bloginfo('home')?>/services/#Verkoop-marketing">VERKOOP EN MARKETING</a></div>
                                            </li>
                                        <?PHP
                                        }
                                        ?>







									</ul>
									<div class="clear"></div>
								</div>
								<h2 class="hentry__title clear font20">Over dit project</h2>
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
						<div class="project__gallery single_project">
							<?php
								$img_list=get_post_meta(get_the_id(),'tt_logo_projects',FALSE);
				           		foreach ($img_list as $key => $img) {
				           		$img_thumb=wp_get_attachment_image_src($img ,'full');
								if($img_thumb!=''){		 
							?>
							<a data-slb-group="225" data-slb-active="1" data-slb-internal="0">
								<img width="100%" src="<?php echo $img_thumb[0];?>">
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