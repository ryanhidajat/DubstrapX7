<?php
/**
 * Title: Features, 3 Column
 * Slug: features-3col
 * Categories: dubstrap-sections, features
 * Description: Three columns with icons and text to showcase features. Adapted from DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section class="py-20 bg-[#0a0a0a]">
  <div class="max-w-[1170px] mx-auto px-4">
    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach ( [ 'Cepat', 'Responsif', 'Modern' ] as $fitur ) : ?>
        <div class="dubstrap-card">
          <div class="dubstrap-icon-box mb-4"><i data-lucide="zap"></i></div>
          <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html( $fitur ); ?></h3>
          <p class="text-gray-400 text-sm">Dibangun dengan Tailwind CSS untuk kinerja maksimal.</p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
