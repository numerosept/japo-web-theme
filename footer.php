					<footer class="footer" role="contentinfo">
						<div class="footer-widgets row expanded text-center small-up-1 medium-up-4">
							<div class="column">
								<div class="row text-center align-spaced fwidget_odd">
								<div class="small-7 medium-6 columns">
									<?php dynamic_sidebar( 'footer1' ); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home.svg"/>
									<h4> Accueil</h4>
								</div>
								</div>
							</div>
							<div class="column">
								<div class="row text-center align-spaced fwidget_even">
								<div class="small-7 medium-6 columns">
									<?php dynamic_sidebar( 'footer2' ); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team.svg"/>
									<h4>L'équipe</h4>
								</div>
								</div>
							</div>
							<div class="column">
								<div class="row text-center align-spaced fwidget_odd">
								<div class="small-7 medium-6 columns">
									<?php dynamic_sidebar( 'footer3' ); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.svg"/>
									<h4>A Propos</h4>
								</div>
								</div>
							</div>
							<div class="column">
								<div class="row text-center align-spaced fwidget_even">
								<div class="small-7 medium-6 columns">
									<?php dynamic_sidebar( 'footer2' ); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team.svg"/>
									<h4>Accès FTP</h4>
								</div>
								</div>
							</div>
						</div>

						<div id="inner-footer" class="row align-middle">
							<div class="small-12 medium-8 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
							<div class="small-12 medium-2 columns">
							<a href="http://www.geocommunes.ch" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/geocommunes_foot.png"/></a>
							</div>
							<div class="small-12 medium-2 columns">
							<a href="http://www.geometre-vd.ch" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GEO_logo_noir.svg"/></a>
							</div>

						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->