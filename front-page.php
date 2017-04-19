<?php get_header(); ?>

<div id="primary" class="content-area">
	<main <?php hybrid_attr( 'content' ); ?>>

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>

		<article <?php hybrid_attr( 'post' ); ?>>

			<div <?php hybrid_attr( 'entry-content' ); ?>>

				<div class="small-12 large-9 column">
					<div class="row align-middle testimonial-slide-content">
						<div class="small-12 medium-4 column hide-for-small-only profile-pic">
							<img src="<?php the_post_thumbnail_url() ?>">
						</div>
						<div class="small-12 medium-8 column testimonial-slide-text">
							<?php the_content() ?>
							<div class="small-profile-pic show-for-small-only">
								<img src="<?php the_post_thumbnail_url() ?>">
							</div>
						</div>
					</div>
				</div>


				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'croft' ),
						'after'  => '</div>',
						) );
						?>
			</div><!-- .entry-content -->

					<?php get_template_part( 'components/entry', 'footer' ); ?>
		</article><!-- #post-## -->



			<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

	<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>
	<?php get_footer(); ?>
