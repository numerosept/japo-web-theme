
	
<script>
	
	// Can also be used with $(document).ready()
jQuery(document).ready(function($){
  $('.flexslider').flexslider({
    animation: "slide",
	touch: "true",
	keyboard:"true",
	controlNav: false,
	slideshow:false
  });
});

</script>
<?php 
$images = get_field('galerie_dimages1');

if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="row">
	                   <div class="small-12 columns align-self-bottom">
		               <p class="galleryitems text-right"><span><?php echo $image['title'];?></span> <?php echo $image['caption']; ?></p>
	                   </div> 
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
  <?php endif; ?>