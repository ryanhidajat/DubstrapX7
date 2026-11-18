<?php
/**
 * DubstrapX7 Front Page Template
 *
 * Halaman beranda company profile:
 * - Hero full background dengan overlay
 * - 3 postingan terakhir dengan thumbnail
 * - 3 icon fitur dengan teks (Lucide Icons)
 *
 * @package DubstrapX7
 */

get_header(); ?>

<!-- Hero Full Background -->
<section id="home" class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 w-full h-full">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Hero background', 'dubstrapx7' ); ?>" class="w-full h-full object-cover" loading="lazy" onerror="this.style.display='none'">
    <div class="absolute inset-0 bg-gradient-to-br from-[#0a0a0a]/80 to-[#0f0f0f]/60"></div>
  </div>
  <div class="relative z-10 max-w-[1170px] mx-auto px-4 text-center">
    <span class="inline-block px-4 py-1.5 rounded-full border border-[#1f1f1f] text-[#0088cc] text-xs font-medium uppercase tracking-wider mb-6">
      <?php esc_html_e( 'Perusahaan Teknologi', 'dubstrapx7' ); ?>
    </span>
    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
      <?php esc_html_e( 'Solusi Digital untuk Bisnis Anda', 'dubstrapx7' ); ?>
    </h1>
    <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10">
      <?php esc_html_e( 'Kami membangun situs web dan aplikasi yang cepat, responsif, dan modern dengan DubstrapX7 — powered by Tailwind CSS, Alpine.js, dan Lucide Icons.', 'dubstrapx7' ); ?>
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="#layanan" class="dubstrap-btn-primary"><?php esc_html_e( 'Lihat Layanan', 'dubstrapx7' ); ?></a>
      <a href="#kontak" class="bg-[#171717] border border-[#1f1f1f] text-white px-5 py-2.5 rounded text-sm font-semibold hover:bg-[#111111] transition-colors"><?php esc_html_e( 'Kontak Kami', 'dubstrapx7' ); ?></a>
    </div>
  </div>
</section>

<!-- 3 Icon Fitur -->
<section id="fitur" class="section section-alt">
  <div class="max-w-[1170px] mx-auto px-4">
    <div class="section-title"><?php esc_html_e( 'Kelebihan Kami', 'dubstrapx7' ); ?></div>
    <div class="section-subtitle"><?php esc_html_e( 'Mengapa pilih DubstrapX7 untuk company profile Anda.', 'dubstrapx7' ); ?></div>
    <div class="grid md:grid-cols-3 gap-8">
      <?php
      $fitur = [
        ['icon' => 'zap',  'title' => esc_html__( 'Cepat', 'dubstrapx7'),  'desc' => esc_html__( 'Tailwind CSS utility-first untuk kinerja maksimal tanpa dependensi berlebihan.', 'dubstrapx7')],
        ['icon' => 'layout', 'title' => esc_html__( 'Responsif', 'dubstrapx7'), 'desc' => esc_html__( 'Tampilan sempurna di desktop, tablet, dan mobile.', 'dubstrapx7')],
        ['icon' => 'shield-check', 'title' => esc_html__( 'Aman', 'dubstrapx7'), 'desc' => esc_html__( 'Dark-mode default, coding standar WP, dan output di-escape lengkap.', 'dubstrapx7')],
      ];
      foreach ( $fitur as $item ) : ?>
        <div class="dubstrap-card text-center">
          <div class="dubstrap-icon-box mx-auto mb-4"><i data-lucide="<?php echo esc_attr( $item['icon'] ); ?>"></i></div>
          <h3 class="text-lg font-bold text-white mb-2"><?php echo $item['title']; ?></h3>
          <p class="text-gray-400 text-sm leading-relaxed"><?php echo $item['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3 Posting Terakhir -->
<section id="terbaru" class="section">
  <div class="max-w-[1170px] mx-auto px-4">
    <div class="section-title"><?php esc_html_e( 'Posting Terbaru', 'dubstrapx7' ); ?></div>
    <div class="section-subtitle"><?php esc_html_e( 'Update terbaru dari kami.', 'dubstrapx7' ); ?></div>
    <div class="grid md:grid-cols-3 gap-8">
      <?php
      $recent = new WP_Query( [
        'posts_per_page' => 3,
        'post_status'    => 'publish',
      ] );
      if ( $recent->have_posts() ) :
        while ( $recent->have_posts() ) : $recent->the_post(); ?>
          <article class="dubstrap-card overflow-hidden">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="aspect-video bg-[#171717] relative overflow-hidden">
                <?php the_post_thumbnail( 'dubstrap-portfolio', [ 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300' ] ); ?>
              </div>
            <?php else : ?>
              <div class="aspect-video bg-[#171717] flex items-center justify-center text-gray-600 text-sm">
                <?php esc_html_e( 'Tanpa Gambar', 'dubstrapx7' ); ?>
              </div>
            <?php endif; ?>
            <div class="p-4">
              <h3 class="text-lg font-bold text-white mb-1 group-hover:text-[#0088cc] transition-colors">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="text-xs text-gray-500 mb-2"><?php the_time( get_option( 'date_format' ) ); ?></div>
              <p class="text-gray-400 text-sm leading-relaxed"><?php the_excerpt(); ?></p>
            </div>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
