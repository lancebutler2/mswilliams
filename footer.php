<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wpfoundation
 */
?>
            </div><!-- .small-12.columns -->
        </div><!-- .row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="row">
            <div class="small-12 columns">
                <div class="site-info">
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpfoundation' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wpfoundation' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( __( 'Theme: %1$s by %2$s.', 'wpfoundation' ), 'wpfoundation', '<a href="http://localhost/~lance/sandbox" rel="designer">Lance Butler II</a>' ); ?>
                </div><!-- .site-info -->
            </div><!-- .small-12.columns -->
        </div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
