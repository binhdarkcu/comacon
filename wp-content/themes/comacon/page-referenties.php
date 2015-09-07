
<?php
	get_header();
?>
<div class="main-title" style="background-color: #f2f2f2; ">
	<div class="container">
		<h1 class="main-title__primary">Referenties</h1>
		<h3 class="main-title__secondary">BEKIJK HIER AL ONZE Referenties voor de verschillende doelgroepen</h3>
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
					<div class="col-xs-12">
						<?php get_template_part('tpl','project');?>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>

<?php
	get_footer();
?>