<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page-full' ); ?>
					
				<?php endwhile; endif; ?>							


	</div> <!-- end #content -->

<?php get_footer(); ?>
