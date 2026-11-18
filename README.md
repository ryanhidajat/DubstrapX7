# DubstrapX7

Dark-mode WordPress classic theme rebuilt from the legacy Dewitech Dubstrap framework (circa 2013). Powered by Tailwind CSS, Alpine.js, and Lucide Icons. Designed for company profiles, agencies, and professional portfolios.

## Features

- **Dark-mode by default** — sleek dark UI with optional light-mode toggle
- **Tailwind CSS utility stack** — custom Dubstrap color palette, Bootstrap 2.3-inspired components
- **Alpine.js + Lucide Icons** — local, no CDN dependency
- **Classic PHP theme** — `header.php`, `footer.php`, `index.php`, `single.php`, `page.php`, `archive.php`, `search.php`, `404.php`, `front-page.php`
- **Company profile homepage** — full-width hero, stats, features, services, latest posts, contact form
- **Block patterns** — 8 ready-to-use patterns (Hero, Services, Testimonials, CTA Newsletter, Footer Columns, Features, Hero Carousel, Portfolio Grid)
- **WordPress block editor ready** — `theme.json`, block pattern categories, editor styles
- **Responsive navigation** — dropdown submenus, mobile menu via Alpine.js
- **AI compatibility layer** — REST API endpoint for theme info

## Installation

1. Download or clone this repository
2. Copy the `DubstrapX7` folder to `/wp-content/themes/`
3. Activate the theme in **Appearance → Themes**
4. Create menus in **Appearance → Menus** and assign to **Primary Navigation** and **Footer Navigation** locations
5. Set your homepage in **Settings → Reading**

## Theme Structure

```
DubstrapX7/
├── 404.php
├── archive.php
├── front-page.php
├── functions.php
├── header.php
├── footer.php
├── index.php
├── page.php
├── single.php
├── search.php
├── style.css
├── theme.json
├── tailwind.config.js
├── package.json
├── .gitignore
├── screenshot.png
├── assets/
│   ├── build/output.css        # Compiled Tailwind CSS
│   ├── src/input.css           # Tailwind source
│   └── js/
│       ├── main.js             # Dark mode, nav, smooth scroll
│       └── vendor/
│           ├── alpine.min.js
│           └── lucide.min.js
├── inc/
│   └── class-dubstrapx7-ai.php # AI / REST API compatibility
└── patterns/                   # Block patterns
    ├── tt5-hero-full-width.php
    ├── tt5-services-3-col.php
    ├── tt5-testimonials-large.php
    ├── tt5-cta-newsletter.php
    ├── tt5-footer-columns.php
    ├── features-3col.php
    ├── hero-carousel.php
    └── portfolio-grid.php
```

## Block Patterns

Available in the block editor under **Dubstrap Framework Sections**:

| Pattern | Description |
|---------|-------------|
| Hero, Full Width Image | Full-width hero with background image, heading, and buttons |
| Services, 3 Columns | Three-column service grid with icons |
| Testimonials, Large | Client testimonials with avatars |
| CTA Newsletter | Newsletter subscription section |
| Footer, Columns | Multi-column footer with branding and links |
| Features, 3 Column | Feature grid with Lucide icons |
| Hero Carousel | Hero section with CTA button |
| Portfolio Grid | Portfolio item grid |

## Development

Theme uses Tailwind CSS v3 for styling. To rebuild assets:

```bash
npm install
npm run build       # Minified production build
npm run dev         # Watch mode for development
```

Vendor JS (Alpine.js, Lucide) is installed via npm and copied to `assets/js/vendor/`.

## Requirements

- WordPress 6.4+
- PHP 8.1+

## License

GPL-2.0-or-later

## Credits

Original Dubstrap framework by Dewitech (2013). DubstrapX7 rebuilt by Dewitech & Modern Block Architect. Patterns adapted from WordPress Twenty Twenty-Five theme.