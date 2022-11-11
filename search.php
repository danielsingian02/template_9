<?php
get_header(); ?>

<div class="site-content-search">
	<div class="search-results">
		<header class="page-header-search">
			<h1 class="page-title-search">
				<?php
					/* translators: %s: the search query */
					printf( esc_html__( 'Search Results for: %s', 'scaffold' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :

				the_post();
				?>

				<article <?php post_class(); ?>>
					<a href="<?php echo esc_url( get_permalink() ); ?>" target="_blank" >

						<div class="content">
							<?php the_post_thumbnail( 'my-custom-image-size' ); ?>

							<header class="entry-header-search">
								<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content-search">
								<?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
							</div><!-- .entry-content -->
						</div>
					</a>
				</article><!-- #post-## -->

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;

			the_posts_navigation();

			else :
				get_template_part( 'content-none' );
		endif;
			?>
	</div>
</div><!-- .site-content -->

<?php
get_footer();
?>