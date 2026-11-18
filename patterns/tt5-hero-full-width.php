<?php
/**
 * DubstrapX7 Pattern: Hero Full Width Image
 *
 * Adapted from Twenty Twenty-Five's hero-full-width-image pattern.
 * Rebuilt with Tailwind CSS + dark-mode styling for DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section
    class="relative min-h-[840px] flex items-center justify-center overflow-hidden bg-[#0a0a0a]"
    style="background-image: linear-gradient(rgba(10, 10, 10, 0.8), rgba(15, 15, 15, 0.6)), url('<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.jpg' ) ); ?>'); background-size: cover; background-position: center;"
>
    <div class="relative z-10 max-w-[1170px] mx-auto px-4 text-center">
        <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
            <?php echo esc_html_x( 'Tell your story', 'Sample hero heading', 'dubstrapx7' ); ?>
        </h2>
        <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
            <?php echo esc_html_x( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.', 'Sample hero paragraph', 'dubstrapx7' ); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="dubstrap-btn-primary"><?php esc_html_e( 'Learn more', 'dubstrapx7' ); ?></a>
            <a href="#" class="bg-[#171717] border border-[#1f1f1f] text-white px-5 py-2.5 rounded text-sm font-semibold hover:bg-[#111111] transition-colors"><?php esc_html_e( 'Contact us', 'dubstrapx7' ); ?></a>
        </div>
    </div>
</section>
