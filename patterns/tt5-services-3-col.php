<?php
/**
 * DubstrapX7 Pattern: Services 3 Columns
 *
 * Adapted from Twenty Twenty-Five's services-3-col pattern.
 * Rebuilt with Tailwind CSS + dark-mode styling for DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section class="section section-alt">
    <div class="max-w-[1170px] mx-auto px-4">
        <h2 class="section-title"><?php esc_html_e( 'Our services', 'dubstrapx7' ); ?></h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $services = [
                [
                    'icon' => 'zap',
                    'title' => esc_html__( 'Collect', 'dubstrapx7' ),
                    'desc' => esc_html__( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'dubstrapx7' ),
                ],
                [
                    'icon' => 'layout',
                    'title' => esc_html__( 'Assemble', 'dubstrapx7' ),
                    'desc' => esc_html__( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'dubstrapx7' ),
                ],
                [
                    'icon' => 'shield-check',
                    'title' => esc_html__( 'Deliver', 'dubstrapx7' ),
                    'desc' => esc_html__( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'dubstrapx7' ),
                ],
            ];
            foreach ( $services as $service ) : ?>
                <div class="dubstrap-card text-center">
                    <div class="dubstrap-icon-box mx-auto mb-4"><i data-lucide="<?php echo esc_attr( $service['icon'] ); ?>"></i></div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php echo $service['title']; ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?php echo $service['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
