
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
					<div class="col-xs-4">
						<div class="sidebar">
							<div class="push-down-30">
								<h4 class="sidebar__headings">Waarom Comacon</h4>
								<span class="i-clock"><img src="images/i-clock.png"/></span>
								<h5>WE RESPECTEREN DEADLINES</h5>
								<p>
									Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>
								
								<span class="i-clock"><img src="images/i-diagram.png"/></span>
								<h5>VERBETEREING STAAT CENTRAAL</h5>
								<p>
									Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>
								
								<span class="i-clock"><img src="images/i-star.png"/></span>
								<h5>Kwaliteit gegarandeerd</h5>
								<p>
									Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.
								</p>
							</div>
						</div>
					</div>
					
					<div class="col-xs-8">
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