<?php
/**
 * The footer template.
 * 
 * @package tctheme
 * @since   1.0.0
 */
?>
		<div id="footer">
			<?php echo get_theme_mod( 'tctheme_footer_message' ); ?>
			&nbsp;
			<div id="footer-title">
				<?php if ( 'always' === get_theme_mod( 'tctheme_display_footer_title' ) ) { ?>
					<?php bloginfo( 'title' ) ?>
				<?php } ?>
			</div><!-- #footer-title -->
		</div><!-- #footer -->
		
	</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>