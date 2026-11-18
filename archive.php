<?php
/**
 * DubstrapX7 Archive Template
 *
 * Digunakan untuk arsip kategori, tag, dan tanggal jika tidak ada
 * template spesifik (misal category.php, tag.php).
 *
 * @package DubstrapX7
 */

get_header(); ?>

<main class="wp-block-group is-layout-constrained dubstrap-card my-8 mx-auto">
	<header class="mb-8 text-center">
		<?php the_archive_title( '<h1 class="text-3xl font-bold text-white">', '</h1>' ); ?>
		<?php the_archive_description( '<div class="text-gray-400 text-sm mt-2">', '</div>' ); ?>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="dubstrap-card p-6">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="mb-4">
							<?php the_post_thumbnail( 'dubstrap-portfolio', array( 'class' => 'w-full h-48 object-cover rounded' ) ); ?>
						</div>
					<?php endif; ?>

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

		<?php
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Sebelumnya', 'dubstrapx7' ),
				'next_text' => __( 'Selanjutnya', 'dubstrapx7' ),
			)
		);
		?>
	<?php else : ?>
		<div class="text-center py-20">
			<h2 class="text-2xl font-bold text-white mb-4"><?php esc_html_e( 'Tidak ada postingan ditemukan.', 'dubstrapx7' ); ?></h2>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
