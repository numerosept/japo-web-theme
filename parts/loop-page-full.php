<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<div class="article-header" style="background-image:url('<?php the_field('hero_bg'); ?>')">
		<div class="row align-spaced article-header">
		  		<div class="column small-12 align-self-bottom">
			  		<div class="row">
				  		<div class="show-for-medium large-2 columns">
				  	<h1 class="logo-page"><a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logoJaquierPointet.jpg"></a></h1>
	
				  		</div>  		
			  		</div>
	  		<div class="row">
		  		<div class="small-10 large-10 columns">
		  		<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
			</div>
  		</div>
	</div>
	</div> <!-- end article header -->

					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->