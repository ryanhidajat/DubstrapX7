<?php
/**
 * DubstrapX7 Pattern: Testimonials Large
 *
 * Adapted from Twenty Twenty-Five's testimonials-large pattern.
 * Rebuilt with Tailwind CSS + dark-mode styling for DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<section class="section">
    <div class="max-w-[1170px] mx-auto px-4">
        <h2 class="section-title"><?php esc_html_e( 'What our clients say', 'dubstrapx7' ); ?></h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $testimonials = [
                [
                    'name' => 'Aulia Rahman',
                    'role' => 'Founder, Startup Indonesia',
                    'text' => 'DubstrapX7 mengubah cara kami membangun company profile. Cepat, responsif, dan tampil profesional.',
                ],
                [
                    'name' => 'Siti Nurhaliza',
                    'role' => 'Marketing Director',
                    'text' => 'Dark-mode default dan Tailwind CSS membuat situs kami terlihat modern tanpa berlebihan.',
                ],
                [
                    'name' => 'Budi Santoso',
                    'role' => 'CEO, Teknologi Nusantara',
                    'text' => 'Dengan 13 tahun pengalaman Dubstrap, X7 adalah generasi terbaik yang pernah kami gunakan.',
                ],
            ];
            foreach ( $testimonials as $index => $t ) : ?>
                <div class="dubstrap-card p-8 relative">
                    <div class="text-[#0088cc] text-4xl mb-4">“</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6"><?php echo $t['text']; ?></p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#171717] border border-[#1f1f1f] flex items-center justify-center text-sm font-bold text-white overflow-hidden">
                            <?php echo strtoupper( substr( $t['name'], 0, 1 ) ); ?>
                        </div>
                        <div>
                            <div class="text-white font-semibold"><?php echo $t['name']; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $t['role']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
