<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package enigma
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="sociallinks">
				<div class="socialsvg"><a href="https://www.facebook.com/pages/HIOF-Enigma/120832731302841?fref=ts" target="_blank">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" viewBox="0 0 32 32">
					<path d="M26.667 0h-21.333c-2.933 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334l21.333-0c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM27.206 16h-5.206v14h-6v-14h-2.891v-4.58h2.891v-2.975c0-4.042 1.744-6.445 6.496-6.445h5.476v4.955h-4.473c-1.328-0.002-1.492 0.692-1.492 1.985l-0.007 2.48h6l-0.794 4.58z" fill="#3b5998"></path>
					</svg>
				<br />Facebook</a></div>
			</div>
			<span>Powered by </span><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'enigma' ) ); ?>"><?php printf( __( ' %s', 'enigma' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme by: %1$s. Contribute to this theme on %2$s.', 'Enigma' ), 'Enigma', '<a href="https://github.com/KristofferBerge/Enigma-Wordpress-theme" rel="designer">GitHub</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
