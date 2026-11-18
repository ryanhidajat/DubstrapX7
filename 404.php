<?php
/**
 * DubstrapX7 404 Template
 *
 * Ditampilkan saat halaman tidak ditemukan.
 *
 * @package DubstrapX7
 */

get_header(); ?>

<main class="wp-block-group is-layout-constrained dubstrap-card my-8 mx-auto">
	<div class="text-center py-20">
		<h1 class="text-5xl font-bold text-white mb-4">404</h1>
		<p class="text-gray-400 mb-6"><?php esc_html_e( 'Halaman tidak ditemukan.', 'dubstrapx7' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dubstrap-btn-primary"><?php esc_html_e( 'Kembali ke Beranda', 'dubstrapx7' ); ?></a>
	</div>
</main>

<?php get_footer(); ?>
