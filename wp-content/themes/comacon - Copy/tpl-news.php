<div class="panel-grid news-home" id="pg-7-1">
	<?php
	    $i = -1;
		$args_news = array(
			'post_type' 	 => 'news',
			'posts_per_page' => 3 ,
			'order'			 => 'asc'
		);
		$queryNews = get_posts($args_news);
		foreach ($queryNews as $news) {
            $i++;
			$url = wp_get_attachment_url( get_post_thumbnail_id($news->ID) );
			$linkNews = get_field( 'link_news', $news->ID );
    ?>
	<div class="panel-grid-cell" id="pgc-7-1-<?php echo $i;?>">
		<div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-<?php echo $i;?>-0">
			<div class="post-69 page type-page status-publish has-post-thumbnail hentry page-box page-box--block">
				<a class="page-box__picture" >
					<img width="360" height="240" src="<?php echo $url;?>" class="attachment-page-box wp-post-image" alt="<?php echo get_the_title($news->ID);?>"/>
				</a>
				<div class="page-box__content">
					<h5 class="page-box__title  text-uppercase">
						<?php echo get_the_title($news->ID);?>
					</h5>
					<div class="desc">
						<?php echo wp_trim_words($news->post_content,45,'');?>	
					</div>
					<p>
						<a><?php echo $linkNews;?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>