<?php
/**
 * DubstrapX7 Search Results Template
 *
 * Ditampilkan saat hasil pencarian.
 *
 * @package DubstrapX7
 */

get_header(); ?>

<main class="wp-block-group is-layout-constrained dubstrap-card my-8 mx-auto">
	<header class="mb-8">
		<h1 class="text-3xl font-bold text-white mb-2">
			<?php
			/* translators: %s: search query */
			printf( esc_html__( 'Hasil pencarian untuk "%s"', 'dubstrapx7' ), get_search_query() );
			?>
		</h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="dubstrap-card p-6">
					<h2 class="text-xl font-bold text-white mb-2">
						<a href="<?php the_permalink(); ?>" class="hover:text-[#0088cc] transition-colors"><?php the_title(); ?></a>
					</h2>
					<div class="text-gray-400 text-sm mb-4">
						<?php the_time( get_option( 'date_format' ) ); ?>
					</div>
					<div class="text-gray-300 text-sm leading-relaxed">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<div class="text-center py-20">
			<h2 class="text-2xl font-bold text-white mb-4"><?php esc_html_e( 'Tidak ada hasil ditemukan.', 'dubstrapx7' ); ?></h2>
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
