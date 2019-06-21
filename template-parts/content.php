<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusinesSuccess
 */

?>

<div id="topPos1to10" class="topPost container NOtopPost">
		<a href="#tip1" class="" onClick="endOfMenu();">1</a>
		<a href="#tip2" class="" onClick="endOfMenu();">2</a>
		<a href="#tip3" class="" onClick="endOfMenu();">3</a>
		<a href="#tip4" class="" onClick="endOfMenu();">4</a>
		<a href="#tip5" class="" onClick="endOfMenu();">5</a>

		<a href="#tip6" class="" onClick="endOfMenu();">6</a>
		<a href="#tip7" class="" onClick="endOfMenu();">7</a>
		<a href="#tip8" class="" onClick="endOfMenu();">8</a>
		<a href="#tip9" class="" onClick="endOfMenu();">9</a>
		<a href="#tip10" class=""onClick="endOfMenu();">10</a>
</div>
<article id="<?php the_ID(); ?>">
	<header class="contentheader">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		
			?>
	
	</header><!-- .entry-header -->

	<?php businessuccess_post_thumbnail(); ?>

	<div class="content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="contentfooter">
		<?php businessuccess_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
