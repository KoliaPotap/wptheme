<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusinesSuccess
 */

?>

	</div><!-- #content -->


</div><!-- #page -->

<?php wp_footer(); ?>
<script>
topPos1to10 = document.getElementById( 'topPos1to10' );
	container = document.getElementById( 'site-navigation' );
	function endOfMenu() {
		topPos1to10.className = topPos1to10.className.replace( ' toggled', ' NOtopPost' );
		container.className = container.className.replace( ' toggled', '' );
	}</script>
</body>
</html>
