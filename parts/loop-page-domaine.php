<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<div class="article-header" style="background-image:url('<?php the_field('image_dentete'); ?>')">
		<div class="row align-spaced article-header">
		  		<div class="column small-12 align-self-bottom">
			  		<div class="row">
				  		<div class="show-for-medium large-2 columns">
				  	<h1 class="logo-page"><a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logoJaquierPointet.jpg"></a></h1>
	
				  		</div>  		
			  		</div>
	  		<div class="row">
		  		<div class="small-10 large-10 columns">
		  		<h1 class="page-title"><span class="nos-competences">Nos activités</span> <?php the_title(); ?></h1>
				</div>
			</div>
  		</div>
	</div>
	</div> <!-- end article header -->
					
	<div class="expanded row">
		<div class="small-12 medium-6 odd">
				<!-- 	//image slider1	 -->
				<?php 
				$images1 = get_field('galerie_dimages1');
				if( $images1 ): ?>
				<div id="slider" class="flexslider">
					<ul class="slides">
					<?php foreach( $images1 as $image1 ): ?>
						<li >
							<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
								<div class="row">
									<div class="small-12 columns align-self-bottom">
										<p class="galleryitems text-right"><span><?php echo $image1['title'];?></span> <?php echo $image1['caption']; ?></p>
									</div> 
                    			</div>
						</li>
		            <?php endforeach; ?>
					</ul>
    			</div>
				<?php endif; ?>
 		</div>	
		<div class="small-12 medium-6 columns">
			<!-- texte contenu -->
			<section class="entry-content" itemprop="articleBody">
				<?php the_field( 'texte_colonne_1' )?>
			</section> <!-- end article section -->
		</div>	
		
	</div>	
	<div class="expanded row">
		
		<div class="small-12 medium-6 small-order-2 medium-order-1 columns ">
			<!-- texte contenu -->
			<section class="entry-content" itemprop="articleBody">
					<?php the_field( 'texte_colonne_2' )?>
			</section> <!-- end article section -->
		</div>	
		<div class="small-12 medium-6 small-order-1 medium-order-2 even">
			<!-- 	//image slider2	 -->
				<?php 
				$images2 = get_field('galerie_dimages2');
				if( $images2 ): ?>
				<div id="slider" class="flexslider">
					<ul class="slides">
					<?php foreach( $images2 as $image2 ): ?>
						<li>
							<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
								<div class="row">
									<div class="small-12 columns align-self-bottom">
										<p class="galleryitems text-right"><span><?php echo $image2['title'];?></span> <?php echo $image2['caption']; ?></p>
									</div> 
                    			</div>
						</li>
		            <?php endforeach; ?>
					</ul>
    			</div>
				<?php endif; ?>
		</div>	
	</div>	
	
	<div class="expanded row">
		<div class="small-12 medium-6 odd">
			<!-- 	//image slider3	 -->
				<?php 
				$images3 = get_field('galerie_dimages3');
				if( $images3 ): ?>
				<div id="slider" class="flexslider">
					<ul class="slides">
					<?php foreach( $images3 as $image3 ): ?>
						<li>
							<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
								<div class="row">
									<div class="small-12 columns align-self-bottom">
										<p class="galleryitems text-right"><span><?php echo $image3['title'];?></span> <?php echo $image3['caption']; ?></p>
									</div> 
                    			</div>
						</li>
		            <?php endforeach; ?>
					</ul>
    			</div>
				<?php endif; ?>

		</div>	
		<div class="small-12 medium-6 columns">
			<!-- texte contenu -->
			<section class="entry-content" itemprop="articleBody">
					<?php the_field( 'texte_colonne_3' )?>
			</section> <!-- end article section -->
		</div>	
		
	</div>	
	
	
    
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->

<script>
	
	// Can also be used with $(document).ready()
jQuery(document).ready(function($){
  $('.flexslider').flexslider({
    touch: true,
    slideshow: false,
    animation: 'slide',
    controlNav: false,
    initDelay: 0,
    start: function(slider) { // Fires when the slider loads the first slide
      var slide_count = slider.count - 1;

      $(slider)
        .find('img.lazy:eq(0)')
        .each(function() {
          var src = $(this).attr('data-src');
          $(this).attr('src', src).removeAttr('data-src');
        });
    },
    before: function(slider) { // Fires asynchronously with each slider animation
      var slides     = slider.slides,
          index      = slider.animatingTo,
          $slide     = $(slides[index]),
          $img       = $slide.find('img[data-src]'),
          current    = + slider.cloneOffset,
          nxt_slide  = current + 1,
          prev_slide = current - 1;

      $slide
        .parent()
        .find('img.lazy:eq(' + current + '), img.lazy:eq(' + prev_slide + '), img.lazy:eq(' + nxt_slide + ')')
        .each(function() {
          var src = $(this).attr('data-src');
          $(this).attr('src', src).removeAttr('data-src');
        });
    }
  });
});

</script>