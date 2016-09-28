<ul class="et-social-icons">


<!-- <li class="fa-social-icon">
	<a target="_blank" href="https://github.com/rw1982">
	<span><i class="et-social-icon fa fa-github-alt"></i></span></a></span>
	</a>
</li> -->

<li class="fa-social-icon">
	<a target="_blank" href="https://www.linkedin.com/company/majux">
	<span><i class="et-social-icon fa fa-linkedin-square"></i></span></a></span>
	</a>
</li>

<li class="fa-social-icon">
	<a target="_blank" href="https://twitter.com/majuxmarketing">
	<span><i class="et-social-icon fa fa-twitter-square"></i></span></a></span>
	</a>
</li>

<!-- <li class="fa-social-icon">
	<a target="_blank" href="https://www.facebook.com/Majux-Marketing-148159281995243/">
	<span><i class="et-social-icon fa fa-facebook-square"></i></span></a></span>
	</a>
</li> -->

<li class="fa-social-icon">
	<a href="mailto:contact@majux.com?Subject=Hello" target="_top">
	<span><i class="et-social-icon fa  fa-envelope-square"></i></span></a></span>
	</a>
</li>

<li class="fa-social-icon">
	<a target="_blank" href="https://www.instagram.com/majuxmarketing/">
	<span><i class="et-social-icon fa  fa-instagram"></i></span></a></span>
	</a>
</li>

<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>

</ul>