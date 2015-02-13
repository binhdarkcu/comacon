<div class="panel-grid" id="pg-7-5">
	<div class="siteorigin-panels-stretch panel-row-style" data-stretch-type="full">
		<div class="panel-grid-cell" id="pgc-7-5-0">
			<div class="panel widget widget_text panel-first-child panel-last-child" id="panel-7-5-0-0">	
				<div class="post-69 page type-page status-publish has-post-thumbnail hentry page-box page-box--block">
					<?php
						$idintro = get_page_id_by_slug('intro-homepage');
						$intro = get_post($idintro);
						$introContent = $intro->post_content;
					?>
					<div class="page-box__content">
						<h5 class="page-box__title  text-uppercase">
							<?php echo $intro->post_title;?>
						</h5>
							<?php echo apply_filters('the_content', $introContent);?>
						</h5>					
					</div>
				</div>            
			</div>
		</div>
	</div>
</div>