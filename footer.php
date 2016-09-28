<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

				<p id="footer-info">
				  Copyright © 2016 <a rel="dofo" alt="Majux" title="Online Marketing for Law Firms" href="http://www.majux.com/">Majux</a> <span class="responsive-pipe">|</span> 2029 Walnut St, Philadelphia, PA 19103
				  <span class="responsive-pipe">|</span> <a href="http://www.majux.com/privacy-policy/" alt="Privacy Policy" title="Majux Privacy Policy">Privacy Policy</a> <span class="responsive-pipe">|</span> <a href="http://www.majux.com/sitemap_index.xml" alt="Site Map" title="Majux Site Map">Site Map</a>
				</p>

<!--
						<p id="footer-info">
							Online Marketing & Website Design by  <a rel="nofollow" title="Online Marketing for Law Firms" href="http://www.majux.com/">Majux</a>
						</p>

						<p id="footer-info"><?php echo Divichild_footer_credits_generator(); ?></p>
-->

					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>