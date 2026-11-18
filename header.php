<?php
/**
 * DubstrapX7 Header Template
 *
 * Berisi doctype, <head>, wp_head(), dan navigasi header utama.
 * Semua navigasi diatur melalui wp_nav_menu() dengan theme_location,
 * tidak ada link hardcode. Dropdown submenu didukung.
 *
 * @package DubstrapX7
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'dubstrapx7-body' ); ?> x-data="{ mobileMenu: false }">
<?php wp_body_open(); ?>

<header class="dubstrap-navbar px-4 py-3 sticky top-0 z-50">
	<div class="max-w-[1170px] mx-auto flex items-center justify-between">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-bold tracking-tighter">
			<?php bloginfo( 'name' ); ?><span class="text-[#0088cc]">X7</span>
		</a>

		<!-- Mobile menu toggle -->
		<button
			@click="mobileMenu = !mobileMenu"
			class="md:hidden text-white focus:outline-none"
			aria-label="Toggle menu"
		>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
			>
				<line x1="3" y1="12" x2="21" y2="12"></line>
				<line x1="3" y1="6" x2="21" y2="6"></line>
				<line x1="3" y1="18" x2="21" y2="18"></line>
			</svg>
		</button>

		<!-- Desktop primary navigation -->
		<nav class="hidden md:flex space-x-8 text-sm font-medium">
			<ul class="dubstrap-nav-menu flex items-center gap-8 list-none p-0 m-0">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'fallback_cb'    => 'dubstrapx7_fallback_menu',
					)
				);
				?>
			</ul>
		</nav>

		<div class="flex items-center gap-3">
			<button
				data-dark-toggle
				class="dark-mode-toggle p-2"
				aria-label="Toggle dark mode"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="18"
					height="18"
					viewBox="0 0 24 24"
					fill="none"
					stroke="currentColor"
					stroke-width="2"
					stroke-linecap="round"
					stroke-linejoin="round"
				>
					<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
				</svg>
			</button>
			<a href="#kontak" class="dubstrap-btn-primary text-xs px-4 py-1.5"><?php esc_html_e( 'Kontak Kami', 'dubstrapx7' ); ?></a>
		</div>

	</div>

	<!-- Mobile menu panel -->
	<div
		x-show="mobileMenu"
		x-transition
		x-cloak
		class="md:hidden bg-[#111111] border-t border-[#1f1f1f] mt-1"
	>
		<div class="max-w-[1170px] mx-auto px-4 py-4 space-y-3">
			<ul class="dubstrap-nav-menu flex flex-col space-y-3 list-none p-0 m-0">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'fallback_cb'    => 'dubstrapx7_fallback_menu',
					)
				);
				?>
			</ul>
			<hr class="border-[#1f1f1f] my-3">
			<a href="#kontak" class="dubstrap-btn-primary block text-center text-xs w-full"><?php esc_html_e( 'Kontak Kami', 'dubstrapx7' ); ?></a>
		</div>
	</div>
</header>
