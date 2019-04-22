<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid">
		<p>	&copy; <?php
  		$fromYear = 2019; 
  		$thisYear = (int)date('Y'); 
  		echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Emmanuel Olivo.</p>
		<p>Made with <i class="far fa-heart"></i> and <i class="fab fa-sass"></i></p>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
<script>
    AOS.init();
</script>
<?php wp_footer(); ?>
</body>
</html>
