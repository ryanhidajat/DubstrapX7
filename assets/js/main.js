/**
 * DubstrapX7 Modern Main JS
 * Dark mode toggle, mobile nav, hover dropdown, Lucide Icons & Alpine.js helpers
 */
document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide Icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // Dark mode toggle
  const toggle = document.querySelector('[data-dark-toggle]');
  const html = document.documentElement;
  const stored = localStorage.getItem('dubstrapx7-dark');
  const isDark = stored === '1' || (stored === null && window.matchMedia('(prefers-color-scheme: dark)').matches);
  if (isDark) html.classList.add('dark');

  if (toggle) {
    toggle.addEventListener('click', () => {
      const on = html.classList.toggle('dark');
      localStorage.setItem('dubstrapx7-dark', on ? '1' : '0');
    });
  }

  // Hover dropdown submenu (JS) — tambah/buang class 'show' pada mouse enter/leave
  document.querySelectorAll('.dubstrap-nav-menu > li.menu-item-has-children').forEach(li => {
    const sub = li.querySelector('.sub-menu');
    if (!sub) return;
    li.addEventListener('mouseenter', () => li.classList.add('show'));
    li.addEventListener('mouseleave', () => li.classList.remove('show'));
  });

  // Smooth scroll for in-page anchors
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });
});
