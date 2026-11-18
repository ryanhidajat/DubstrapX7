<?php
/**
 * DubstrapX7 Footer Template
 *
 * Berisi footer widget area, copyright, dan wp_footer().
 * Semua navigasi footer diatur melalui wp_nav_menu() dengan
 * theme_location 'footer', tidak ada link hardcode.
 *
 * @package DubstrapX7
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
					<?php esc_html_e( 'Theme company profile modern dengan dark-mode, Tailwind CSS, Alpine.js, dan Lucide Icons. Dibangun untuk kecepatan dan kesan profesional.', 'dubstrapx7' ); ?>
				</p>
			</div>
			<div>
				<div class="text-sm font-bold text-white uppercase tracking-wider mb-4"><?php esc_html_e( 'Perusahaan', 'dubstrapx7' ); ?></div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => 'ul',
						'container_class'=> 'space-y-2 text-sm text-gray-400',
						'items_wrap'     => '%3$s',
						'fallback_cb'    => '__return_empty_string',
					)
				);
				?>
				</div>
				<div>
				<div class="text-sm font-bold text-white uppercase tracking-wider mb-4"><?php esc_html_e( 'Legal', 'dubstrapx7' ); ?></div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_legal',
						'container'      => 'ul',
						'container_class'=> 'space-y-2 text-sm text-gray-400',
						'items_wrap'     => '%3$s',
						'fallback_cb'    => '__return_empty_string',
					)
				);
				?>
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

<?php wp_footer(); ?>
</body>
</html>
