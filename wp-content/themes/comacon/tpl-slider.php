<div class="jumbotron  jumbotron--with-captions">
	<div class="carousel  slide  js-jumbotron-slider" id="headerCarousel" data-interval="5000">
	<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php
				$i = 0;
				$args_slider = array(
					'post_type' 	 => 'slider',
					'posts_per_page' => 5 ,
					'order'			 => 'asc'
				);
				$querySlider = get_posts($args_slider);
				foreach ($querySlider as $slider) {
                    $i++;
					$url = wp_get_attachment_url( get_post_thumbnail_id($slider->ID) );
					$bigTitle = get_field( 'big_title_slider', $slider->ID );
					$linkTo = get_field( 'link_to_slider', $slider->ID );
            ?>
			<div class="item  <?php if($i == 1) echo 'active';?>">
				<img srcset="<?php echo $url?>" sizes="100vw" alt="<?php echo get_the_title($slider->ID);?>">
                <div class="group-carousel-content">
                    <div class="container">
                        <div class="carousel-content">
                            <div class="jumbotron__category">
                                <h6><?php echo get_the_title($slider->ID);?></h6>
                            </div>
                            <div class="jumbotron__title">
                                <h1><?php echo $bigTitle;?></h1>
                            </div>
                            <div class="jumbotron__content">
                                <p><?php echo $slider->post_content;?></p>
                                <a class="btn  btn-primary" href="<?php echo bloginfo('home').'/'.$linkTo;?>">MEER INFO</a>
                            </div>
                        </div>
                    </div>

                </div>
			</div>
			<?php }?>
		</div>
		<!-- Controls -->
		<a class="left  carousel-control" href="#headerCarousel" role="button" data-slide="prev">
		<i class="fa  fa-angle-left"></i>
		</a>
		<a class="right  carousel-control" href="#headerCarousel" role="button" data-slide="next">
		<i class="fa  fa-angle-right"></i>
		</a>
	</div>
</div>