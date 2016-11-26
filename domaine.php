<?php
/*
Template Name: domaine
*/
?>

<?php get_header(); ?>
			
	<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page-domaine' ); ?>
					
				<?php endwhile; endif; ?>							
 <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
