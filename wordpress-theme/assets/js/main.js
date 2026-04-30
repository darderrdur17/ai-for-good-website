/**
 * AI for Good — Main JavaScript
 *
 * Handles:
 *  1. Mobile navigation toggle (hamburger ↔ close)
 *  2. Sticky nav scroll shadow
 *  3. Accordion (Goals section)
 *  4. Program / initiative tabs
 *  5. Smooth-scroll for anchor links on same page
 *  6. Active nav-link highlighting on scroll (Intersection Observer)
 *  7. Tab label show/hide on small screens
 */

(function () {
  'use strict';

  /* ─────────────────────────────────────────────────────────────
     Utility: safely query one or many elements
     ───────────────────────────────────────────────────────────── */
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

  /* ─────────────────────────────────────────────────────────────
     1. MOBILE NAVIGATION TOGGLE
     ───────────────────────────────────────────────────────────── */
  function initMobileNav() {
    const toggle = $('#nav-toggle');
    const drawer = $('#nav-mobile');
    if (!toggle || !drawer) return;

    toggle.addEventListener('click', function () {
      const isOpen = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', String(!isOpen));
      drawer.classList.toggle('is-open', !isOpen);
      drawer.setAttribute('aria-hidden', String(isOpen));
    });

    // Close drawer when a link inside it is clicked
    $$('a', drawer).forEach(function (link) {
      link.addEventListener('click', function () {
        toggle.setAttribute('aria-expanded', 'false');
        drawer.classList.remove('is-open');
        drawer.setAttribute('aria-hidden', 'true');
      });
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
        toggle.setAttribute('aria-expanded', 'false');
        drawer.classList.remove('is-open');
        drawer.setAttribute('aria-hidden', 'true');
        toggle.focus();
      }
    });

    // Close when clicking outside nav
    document.addEventListener('click', function (e) {
      const nav = $('#site-nav');
      if (nav && !nav.contains(e.target) && drawer.classList.contains('is-open')) {
        toggle.setAttribute('aria-expanded', 'false');
        drawer.classList.remove('is-open');
        drawer.setAttribute('aria-hidden', 'true');
      }
    });
  }

  /* ─────────────────────────────────────────────────────────────
     2. STICKY NAV — add shadow on scroll
     ───────────────────────────────────────────────────────────── */
  function initStickyNav() {
    const nav = $('#site-nav');
    if (!nav) return;

    function onScroll() {
      nav.classList.toggle('scrolled', window.scrollY > 10);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once immediately
  }

  /* ─────────────────────────────────────────────────────────────
     3. ACCORDION (Goals / SDG section)
     Only one pane open at a time (matching Kadence default).
     ───────────────────────────────────────────────────────────── */
  function initAccordion() {
    const accordion = $('.accordion');
    if (!accordion) return;

    const triggers = $$('.accordion-trigger', accordion);

    triggers.forEach(function (trigger) {
      trigger.addEventListener('click', function () {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        const panelId    = this.getAttribute('aria-controls');
        const panel      = document.getElementById(panelId);

        // Close all
        triggers.forEach(function (t) {
          const pid = t.getAttribute('aria-controls');
          const p   = document.getElementById(pid);
          t.setAttribute('aria-expanded', 'false');
          if (p) p.classList.remove('is-open');
        });

        // If it wasn't open, open this one
        if (!isExpanded) {
          this.setAttribute('aria-expanded', 'true');
          if (panel) panel.classList.add('is-open');
        }
      });

      // Keyboard: Space / Enter already handled by button default
      trigger.addEventListener('keydown', function (e) {
        const items = triggers;
        const idx   = items.indexOf(this);

        if (e.key === 'ArrowDown') {
          e.preventDefault();
          if (idx < items.length - 1) items[idx + 1].focus();
        } else if (e.key === 'ArrowUp') {
          e.preventDefault();
          if (idx > 0) items[idx - 1].focus();
        } else if (e.key === 'Home') {
          e.preventDefault();
          items[0].focus();
        } else if (e.key === 'End') {
          e.preventDefault();
          items[items.length - 1].focus();
        }
      });
    });
  }

  /* ─────────────────────────────────────────────────────────────
     4. PROGRAMME TABS
     ───────────────────────────────────────────────────────────── */
  function initProgramTabs() {
    const tablist = $('.programs-tabs');
    if (!tablist) return;

    const tabs   = $$('.program-tab',   tablist);
    const panels = $$('.program-detail');
    if (!tabs.length || !panels.length) return;

    function activateTab(tab) {
      // Deactivate all
      tabs.forEach(function (t) {
        t.classList.remove('is-active');
        t.setAttribute('aria-selected', 'false');
        t.setAttribute('tabindex', '-1');
      });

      panels.forEach(function (p) {
        p.classList.remove('is-active');
      });

      // Activate chosen
      tab.classList.add('is-active');
      tab.setAttribute('aria-selected', 'true');
      tab.removeAttribute('tabindex');

      const targetId = tab.dataset.target;
      const panel    = document.getElementById(targetId);
      if (panel) {
        panel.classList.add('is-active');
        // Move focus to panel on keyboard activation
        panel.focus();
      }
    }

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        activateTab(this);
      });

      // Arrow key navigation between tabs
      tab.addEventListener('keydown', function (e) {
        const idx = tabs.indexOf(this);

        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
          e.preventDefault();
          const next = tabs[(idx + 1) % tabs.length];
          next.focus();
          activateTab(next);
        } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
          e.preventDefault();
          const prev = tabs[(idx - 1 + tabs.length) % tabs.length];
          prev.focus();
          activateTab(prev);
        } else if (e.key === 'Home') {
          e.preventDefault();
          tabs[0].focus();
          activateTab(tabs[0]);
        } else if (e.key === 'End') {
          e.preventDefault();
          tabs[tabs.length - 1].focus();
          activateTab(tabs[tabs.length - 1]);
        }
      });
    });

    // Make tabpanels focusable (for keyboard)
    panels.forEach(function (p) {
      p.setAttribute('tabindex', '-1');
    });
  }

  /* ─────────────────────────────────────────────────────────────
     5. SMOOTH SCROLL — anchor links on the same page
     (supplement for browsers that don't honour CSS scroll-behavior)
     ───────────────────────────────────────────────────────────── */
  function initSmoothScroll() {
    $$('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        const href   = this.getAttribute('href');
        if (href === '#') return;

        const target = document.getElementById(href.slice(1));
        if (!target) return;

        e.preventDefault();

        // Offset for fixed nav
        const navHeight = ($('#site-nav') || {}).offsetHeight || 64;
        const top = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 16;

        window.scrollTo({ top: top, behavior: 'smooth' });

        // Update URL without jumping
        history.pushState(null, '', href);

        // Focus target for accessibility
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
      });
    });
  }

  /* ─────────────────────────────────────────────────────────────
     6. ACTIVE NAV-LINK HIGHLIGHTING (Intersection Observer)
     ───────────────────────────────────────────────────────────── */
  function initActiveNavLinks() {
    if (!('IntersectionObserver' in window)) return;

    const sections  = $$('main [id]');
    const navLinks  = $$('.nav-links a[href^="#"], .nav-mobile a[href^="#"]');
    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            const id = entry.target.id;
            navLinks.forEach(function (link) {
              const href = link.getAttribute('href');
              link.style.color = href === '#' + id ? 'var(--primary)' : '';
            });
          }
        });
      },
      { rootMargin: '-30% 0px -60% 0px', threshold: 0 }
    );

    sections.forEach(function (section) {
      observer.observe(section);
    });
  }

  /* ─────────────────────────────────────────────────────────────
     7. TABLET TAB LABELS — show/hide long vs short text
     ───────────────────────────────────────────────────────────── */
  function initTabLabels() {
    // CSS handles visibility via media queries — no JS needed.
    // Long labels: .tab-label-long  (hidden on mobile via CSS)
    // Short labels: .tab-label-short (hidden on desktop via CSS)
    // Inject the required CSS rules dynamically so they work even
    // without additional stylesheet edits.
    const style = document.createElement('style');
    style.textContent = [
      '@media (max-width:520px){',
      '  .tab-label-long{display:none!important}',
      '  .tab-label-short{display:inline!important}',
      '}',
      '@media (min-width:521px){',
      '  .tab-label-short{display:none!important}',
      '  .tab-label-long{display:inline!important}',
      '}',
    ].join('');
    document.head.appendChild(style);
  }

  /* ─────────────────────────────────────────────────────────────
     INIT — Run after DOM is ready
     ───────────────────────────────────────────────────────────── */
  function init() {
    initMobileNav();
    initStickyNav();
    initAccordion();
    initProgramTabs();
    initSmoothScroll();
    initActiveNavLinks();
    initTabLabels();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    // DOM already loaded (script in footer)
    init();
  }

})();
