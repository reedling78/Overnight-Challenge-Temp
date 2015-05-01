<?php 
/**
 * sidebar.php
 *
 * The primary sidebar.
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside class="sidebar medium-4 columns" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside> <!-- end sidebar -->
<?php endif; ?>