<?php
/**
 * DubstrapX7 Page Template
 *
 * Digunakan untuk halaman statis (About, Kontak, dll).
 *
 * @package DubstrapX7
 */

get_header(); ?>

<main class="wp-block-group is-layout-constrained dubstrap-card my-8 mx-auto">
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="mb-8">
				<h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight"><?php the_title(); ?></h1>
			</header>

			<div class="content prose-lg text-gray-300 leading-relaxed">
				<?php the_content(); ?>
			</div>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		</article>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
