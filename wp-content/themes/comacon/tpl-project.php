<?php
	$refer = !empty($_REQUEST['refer']) ? $_REQUEST['refer']:0;
?>
<?php
	$curlang = pll_current_language();
?>
<div class="panel-grid" id="pg-7-2">
	<div class="siteorigin-panels-stretch panel-row-style projects" data-stretch-type="full">
		<div class="panel-grid-cell" id="pgc-7-2-0">
			<div class="panel widget widget_ess-grid-widget panel-first-child panel-last-child" id="panel-7-2-0-0">
				<!-- CACHE FOUND FOR: 33 -->
				<!-- ESSENTIAL GRID SKIN CSS -->
				<!-- ESSENTIAL GRID END SKIN CSS -->
				<!-- THE ESSENTIAL GRID 2.0.5 -->
				<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
				<article class="myportfolio-container buildpress" id="esg-grid-33-1-wrap">
					<!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
					<div id="esg-grid-33-1" class="esg-grid" style="background-color: transparent;padding: 0px 0px 25px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; display:none">
						<article class="esg-filters esg-singlefilters" style="margin-bottom: 30px; text-align: left; "><!-- THE FILTERING, SORTING AND WOOCOMMERCE BUTTONS --><!-- THE FILTER BUTTONS -->
							<div class="esg-filter-wrapper  esg-fgc-33" style="margin-left: 0px; margin-right: 0px;">
								<div class="esg-filterbutton  <?php if($refer == '' ) echo 'selected';?> esg-allfilter" data-filter="filterall" data-fid="-1">
									<span>
										<?php
											if($curlang == "en") {
												echo 'ALL REFERENCES';
											}elseif($curlang == "es") {
												echo 'TODAS LAS REFERENCIAS';
											}else{
												echo 'ALLE REFERENTIES';
											}
										?>
										
									</span>
								</div>
								<?php
									$args_category = array(
										'type'                     => 'post',
										'exclude'                  => array('1','14','18')

									); 
									$categories = get_categories($args_category); 
									//print_r($categories);
									$i = 0;
									  foreach ($categories as $category) {
									  	$i++;
									  	$catname = $category->cat_name;
										$catslug = $category->slug;
								?>
								<div class="esg-filterbutton <?php if($refer == $i) echo 'selected';?>" data-fid="<?php echo $category->id;?>" data-filter="filter-<?php echo $catslug;?>">
									<span><?php echo $catname;?></span>
									<span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
								</div>
								<?php }?>
								<div class="eg-clearfix"></div>
							</div>
						</article>
						<div class="esg-clear-no-height"></div><!-- ############################ -->
						<!-- THE GRID ITSELF WITH ENTRIES -->
						<!-- ############################ -->
							<ul>
							<!-- PORTFOLIO ITEM 92 -->
							<?php
								$args_projects = array(
									'post_type' 	 => 'post',
									'posts_per_page' =>  -1 ,
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
								<li class="filterall filter-<?php echo $strCat; ?> eg-buildpress-item-skin-wrapper eg-post-id-<?php echo $projects->ID; ?>">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
									<div class="esg-media-cover-wrapper">
									<!-- THE MEDIA OF THE ENTRY -->
										<div class="esg-entry-media">
											<img src="<?php echo $url[0]; ?>" alt="" width="255" height="190">
										</div>
										<!-- THE CONTENT OF THE ENTRY -->
										<div class="esg-entry-cover">
										<!-- THE COLORED OVERLAY -->
											<div class="esg-overlay esg-fade eg-buildpress-item-skin-container" data-delay="0"></div>
											<div class="esg-center eg-post-<?php echo $projects->ID; ?> eg-buildpress-item-skin-element-1 esg-flipdown" data-delay="0"><?php echo get_the_title($projects->ID);?></div>
											<div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
											<div class="esg-center eg-post-<?php echo $projects->ID; ?> eg-buildpress-item-skin-element-0-a esg-slideup" data-delay="0"><a class="eg-buildpress-item-skin-element-0 eg-post-<?php echo $projects->ID; ?>" href="<?php echo get_the_permalink($projects->ID); ?>" target="_self">
												<?php
													if($curlang == "en") {
														echo get_field('check_project_en','option');
													}elseif($curlang == "es") {
														echo get_field('check_project_es','option');
													}else{
														echo get_field('check_project_nl','option');
													}
												?>
											</a></div>
										</div><!-- END OF THE CONTENT IN THE ENTRY -->
									</div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
								</li><!-- END OF PORTFOLIO ITEM -->
							<?php }?>
								
							</ul>
							<!-- ############################ -->
							<!--      END OF THE GRID         -->
							<!-- ############################ -->
						<article class="esg-filters esg-singlefilters" style="margin-top: 30px; text-align: center; "><div class="esg-navigationbutton esg-left  esg-fgc-33" style="margin-left: 0px !important; margin-right: 0px !important; display: none;"><i class="eg-icon-left-open"></i></div><div class="esg-navigationbutton esg-right  esg-fgc-33" style="margin-left: 0px !important; margin-right: 0px !important; display: none;"><i class="eg-icon-right-open"></i></div></article><div class="esg-clear-no-height"></div> 
						</div><!-- END OF THE GRID -->
					</article>
				<!-- END OF THE GRID WRAPPER -->
				<div class="clear"></div>
				<script type="text/javascript">var essapi_33;jQuery(document).ready(function(){essapi_33=jQuery("#esg-grid-33-1").tpessential({gridID:33,layout:"even",forceFullWidth:"off",lazyLoad:"off",row:10,loadMoreAjaxToken:"5f4a1bfe04",loadMoreAjaxUrl:"",loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",ajaxContentTarget:"ess-grid-ajax-container-",ajaxScrollToOffset:"0",ajaxCloseButton:"off",ajaxContentSliding:"on",ajaxScrollToOnLoad:"on",ajaxNavButton:"off",ajaxCloseType:"type1",ajaxCloseInner:"false",ajaxCloseStyle:"light",ajaxClosePosition:"tr",space:30,pageAnimation:"fade",paginationScrollToTop:"off",spinner:"spinner0",evenGridMasonrySkinPusher:"off",lightBoxMode:"single",animSpeed:300,delayBasic:1,mainhoverdelay:1,filterType:"single",showDropFilter:"hover",filterGroupClass:"esg-fgc-33",aspectratio:"4:3",responsiveEntries:[{width:1400,amount:4},{width:1170,amount:4},{width:1024,amount:4},{width:960,amount:3},{width:778,amount:3},{width:640,amount:3},{width:480,amount:1}]});});</script>
			</div>
		</div>
</div>
</div>