<div class="col-md-4 reference-sidebar">
	<h4>Referenties</h4>
	<ul style="list-style-type: none;padding-left: 0;">
		<?php
			$args_projects = array(
				'post_type' 	 => 'post',
				'posts_per_page' =>  3 ,
				'order'			 => 'asc'
			);
			$query_projects = get_posts($args_projects);
			foreach ( $query_projects as $projects ) {
		    	$category = get_the_category($projects->ID);
				$cat_slug=  $category[0]->slug;
				$strCat = '';	
				$length = count($category);
				for($i = 0; $i < $length; $i++){
					$strCat .= $category[$i]->slug.' ';
				}
				$url = wp_get_attachment_image_src( get_post_thumbnail_id($projects->ID), 'large' );
		?>
		<li>
			<img src="<?php echo $url[0]; ?>"/>
			<div class="esg-entry-cover">
			<!-- THE COLORED OVERLAY -->
				<div class="esg-overlay esg-fade eg-buildpress-item-skin-container" data-delay="0"></div>
				<div class="esg-cc eec">
					<div class="esg-center eg-post-<?php echo $projects->ID; ?> eg-buildpress-item-skin-element-1 esg-flipdown" data-delay="0" style=""><?php echo get_the_title($projects->ID);?></div>
					<div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear" style="height: 5px; visibility: inherit; opacity: 1; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 1, 0.999166666666667);"></div>
					<div class="esg-center eg-post-<?php echo $projects->ID; ?> eg-buildpress-item-skin-element-0-a esg-slideup" data-delay="0" style="">
						<a class="eg-buildpress-item-skin-element-0 eg-post-<?php echo $projects->ID; ?>" href="<?php echo get_the_permalink($projects->ID); ?>" target="_self">View Project</a>
					</div>
					<div>
						
					</div>
				</div>
				
				
			</div>
			<br/>
		</li>
		<?php }?>
	</ul>
</div>