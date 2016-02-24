	<?php
	if(!is_front_page()): ?>
		</div><!-- .container-fluid -->
		<br/>
		<footer>
			<div class="container">
				<?php wp_nav_menu([
					'theme_location'=>'footer_nav',
					'container'=>false,
					'menu_class'=>'footer_nav_container'
				]); ?>
			</div>
		</footer>
	<?php endif; ?>
	<!-- Hook for Javascript files -->
	<?php wp_footer(); ?>
</body>
</html>