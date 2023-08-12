<footer class="site-footer">
	<div class="container">
		<div class="logo-wrapper">
			<img width="178" height="38" src="https://assets.codepen.io/162656/forecastr-logo-white.svg" alt="forecastr logo">
			<div>...for creating memories!</div>
		</div>

		<div class="widgets-wrapper">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="widget">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<?php
			endif;

			if ( is_active_sidebar( 'footer-2' ) ) :
				?>
				<div class="widget">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<?php
			endif;

			if ( is_active_sidebar( 'footer-3' ) ) :
				?>
				<div class="widget">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<?php
			endif;

			if ( is_active_sidebar( 'footer-4' ) ) :
				?>
				<div class="widget">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer>
