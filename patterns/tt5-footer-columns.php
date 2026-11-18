<?php
/**
 * DubstrapX7 Pattern: Footer Columns
 *
 * Adapted from Twenty Twenty-Five's footer-columns pattern.
 * Rebuilt with Tailwind CSS + dark-mode styling for DubstrapX7.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

?>
<footer class="border-t border-[#1f1f1f] mt-12 py-12 bg-[#0a0a0a]">
    <div class="max-w-[1170px] mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div class="col-span-1 md:col-span-2">
                <div class="text-xl font-bold text-white mb-4">
                    <?php bloginfo( 'name' ); ?><span class="text-[#0088cc]">X7</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?php esc_html_e( 'Theme company profile modern dengan dark-mode, Tailwind CSS, Alpine.js, dan Lucide Icons.', 'dubstrapx7' ); ?>
                </p>
            </div>
            <div>
                <div class="text-sm font-bold text-white uppercase tracking-wider mb-4"><?php esc_html_e( 'Perusahaan', 'dubstrapx7' ); ?></div>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#tentang" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Tentang Kami', 'dubstrapx7' ); ?></a></li>
                    <li><a href="#layanan" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Layanan', 'dubstrapx7' ); ?></a></li>
                    <li><a href="#portfolio" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Portfolio', 'dubstrapx7' ); ?></a></li>
                    <li><a href="#kontak" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Kontak', 'dubstrapx7' ); ?></a></li>
                </ul>
            </div>
            <div>
                <div class="text-sm font-bold text-white uppercase tracking-wider mb-4"><?php esc_html_e( 'Legal', 'dubstrapx7' ); ?></div>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Kebijakan Privasi', 'dubstrapx7' ); ?></a></li>
                    <li><a href="#" class="hover:text-[#0088cc] transition-colors"><?php esc_html_e( 'Syarat Ketentuan', 'dubstrapx7' ); ?></a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-[#1f1f1f] pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
            <div>&copy; <span id="year"></span> <?php bloginfo( 'name' ); ?> by Dewitech.</div>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition-colors">Twitter</a>
                <a href="#" class="hover:text-white transition-colors">Instagram</a>
                <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>
<script>document.getElementById( 'year' ).textContent = new Date().getFullYear();</script>
