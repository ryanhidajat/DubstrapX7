<?php
/**
 * Title: Portfolio Grid
 * Slug: portfolio-grid
 * Categories: dubstrap-sections, portfolio
 * Description: Grid of portfolio items with images and captions. Adapted from DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section class="py-20 bg-[#0a0a0a] border-b border-[#1f1f1f]">
  <div class="max-w-[1170px] mx-auto px-4">
    <h2 class="text-2xl font-bold text-white mb-10 text-center">Portfolio</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <div class="dubstrap-card overflow-hidden">
          <div class="portfolio-img bg-[#171717] flex items-center justify-center text-gray-500">
            Gambar <?php echo esc_html( $i ); ?>
          </div>
          <div class="p-4">
            <h4 class="font-bold text-white mb-1">Proyek <?php echo esc_html( $i ); ?></h4>
            <p class="text-sm text-gray-400">Kategori Desain</p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
