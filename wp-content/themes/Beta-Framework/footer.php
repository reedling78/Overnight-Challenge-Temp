<?php 
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

		</div> <!-- end row -->
	</div> <!-- end container -->

	<!-- FOOTER -->
	<footer class="site-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>
			
			<div class="copyright">
				<p>
					&copy; <?php echo date( 'Y' ); ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php _e( 'All rights reserved.', 'alpha' ); ?>
				</p>
			</div> <!-- end copyright -->
		</div> <!-- end container -->
	</footer> <!-- end site-footer -->

	<?php wp_footer(); ?>
	<script data-main="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main" src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/requirejs/require.js"></script>
</body>
</html>