<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
					
		    <main id="main" class="large-12 medium-12 " role="main">
			    	<div class="row expanded">
				    	<div class="large-12 medium-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'parts/loop', 'page' ); ?>
				<?php endwhile; endif; ?>	
			<!-- blocs milieu -->
				</div>	</div>
			
			<div class="row expanded small-collapse small-up-1 medium-up-2 large-up-4"> 				<div class="column odd">
					asdfadsf
				</div>
				<div class="column even">
					adfasdf
				</div>
				<div class="column odd">
					asdfasdf
  				</div>
  				<div class="column even">
  				asdfasdf
  				</div>
 			</div>	<!-- fin blocs milieu -->		
 			
 			
 			<!-- footerpage -->
	
			<div class="row expanded footer small-collapse small-up-1 medium-up-3 ">
				<div class="column footer1">
					asdfadsf
				</div>
				<div class="column footer2">
					adfasdf
				</div>
				<div class="column footer3">
					asdfasdf
  				</div>
 			</div>	<!-- finfooterpage -->					

			</main> <!-- end #main -->

	
	</div> <!-- end #content -->

<?php get_footer(); ?>
