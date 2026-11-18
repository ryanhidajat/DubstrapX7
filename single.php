<?php
/**
 * DubstrapX7 Single Post Template
 *
 * Digunakan untuk menampilkan satu postingan (single post).
 *
 * @package DubstrapX7
 */

get_header(); ?>

<main class="wp-block-group is-layout-constrained dubstrap-card my-8 mx-auto">
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-6">
					<?php the_post_thumbnail( 'dubstrap-featured', array( 'class' => 'w-full h-64 object-cover rounded-lg' ) ); ?>
				</div>
			<?php endif; ?>

			<header class="mb-6">
				<?php if ( ! is_attachment() ) : ?>
					<div class="text-xs text-[#0088cc] font-semibold uppercase tracking-wider mb-2">
						<?php the_category( ', ' ); ?>
					</div>
				<?php endif; ?>

				<h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight"><?php the_title(); ?></h1>

				<div class="flex items-center gap-4 text-xs text-gray-500 mb-6">
					<span><?php the_time( get_option( 'date_format' ) ); ?></span>
					<span class="border-l border-[#1f1f1f] pl-4">
						<?php
						/* translators: %s: author name */
						printf( esc_html__( 'Oleh %s', 'dubstrapx7' ), get_the_author() );
						?>
					</span>
				</div>
			</header>

			<div class="content prose-lg text-gray-300 leading-relaxed mb-8">
				<?php the_content(); ?>
			</div>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

			<nav class="flex justify-between items-center border-t border-[#1f1f1f] pt-6 mt-8">
				<?php
				$prev_post = get_previous_post();
				if ( $prev_post ) :
					?>
					<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="text-[#0088cc] text-sm hover:underline"><?php esc_html_e( '&larr; Sebelumnya', 'dubstrapx7' ); ?></a>
				<?php else : ?>
					<span class="text-sm text-gray-600"></span>
				<?php endif; ?>

				<?php
				$next_post = get_next_post();
				if ( $next_post ) :
					?>
					<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="text-[#0088cc] text-sm hover:underline"><?php esc_html_e( 'Selanjutnya &rarr;', 'dubstrapx7' ); ?></a>
				<?php else : ?>
					<span class="text-sm text-gray-600"></span>
				<?php endif; ?>
			</nav>
		</article>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
