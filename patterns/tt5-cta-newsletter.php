<?php
/**
 * DubstrapX7 Pattern: CTA Newsletter
 *
 * Adapted from Twenty Twenty-Five's cta-newsletter pattern.
 * Rebuilt with Tailwind CSS + dark-mode styling for DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section class="section section-alt">
    <div class="max-w-[1170px] mx-auto px-4">
        <div class="dubstrap-card p-12 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-[#0088cc]/10 -rotate-12"></div>
            <div class="relative z-10">
                <h2 class="text-3xl font-bold text-white mb-4"><?php esc_html_e( 'Subscribe to our newsletter', 'dubstrapx7' ); ?></h2>
                <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">
                    <?php esc_html_e( 'Get the latest updates, tips, and news delivered straight to your inbox.', 'dubstrapx7' ); ?>
                </p>
                <form class="flex flex-col sm:flex-row gap-3 justify-center max-w-md mx-auto">
                    <input
                        type="email"
                        placeholder="<?php esc_attr_e( 'Your email address', 'dubstrapx7' ); ?>"
                        class="w-full sm:w-64 bg-[#171717] border border-[#1f1f1f] rounded px-4 py-3 text-white focus:border-[#0088cc] focus:outline-none transition-colors"
                        required
                    />
                    <button type="submit" class="dubstrap-btn-primary">
                        <?php esc_html_e( 'Subscribe', 'dubstrapx7' ); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
