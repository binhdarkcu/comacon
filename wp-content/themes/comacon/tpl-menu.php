<div class="navigation">
	<div class="collapse  navbar-collapse" id="buildpress-navbar-collapse">
		<?php
			$nav = array(
				'theme_location'  => 'menu_top',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'navigation--main',
				'menu_id'         => 'menu-main-menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);
			
			wp_nav_menu( $nav );
		?>
		
	</div>
</div>