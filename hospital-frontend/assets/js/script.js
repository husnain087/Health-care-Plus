// Basic script for navigation toggle and search enhancements
document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.getElementById('nav-toggle');
  const siteNav = document.getElementById('site-nav');
  if (navToggle && siteNav) {
    navToggle.addEventListener('click', () => {
      siteNav.classList.toggle('open');
    });
  }

  // Login menu dropdown
  const loginMenu = document.getElementById('login-menu');
  const loginToggle = document.getElementById('login-menu-toggle');
  const loginDropdown = document.getElementById('login-dropdown');
  if (loginMenu && loginToggle && loginDropdown) {
    const closeMenu = () => {
      loginMenu.classList.remove('open');
      loginToggle.setAttribute('aria-expanded', 'false');
      loginDropdown.setAttribute('aria-hidden', 'true');
    };
    const openMenu = () => {
      loginMenu.classList.add('open');
      loginToggle.setAttribute('aria-expanded', 'true');
      loginDropdown.setAttribute('aria-hidden', 'false');
    };
    loginToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      if (loginMenu.classList.contains('open')) closeMenu(); else openMenu();
    });
    document.addEventListener('click', (e) => {
      if (!loginMenu.contains(e.target)) closeMenu();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeMenu();
    });
  }

  // Home page search: pass query params to doctor-search.html
  const homeSearch = document.getElementById('home-search-form');
  if (homeSearch) {
    homeSearch.addEventListener('submit', (e) => {
      // Allow normal navigation, but ensure empty inputs don't add empty params
      const url = new URL((homeSearch.getAttribute('action') || 'doctor-search.html'), window.location);
      const formData = new FormData(homeSearch);
      for (const [key, value] of formData.entries()) {
        if (String(value).trim().length > 0) url.searchParams.set(key, String(value));
      }
      e.preventDefault();
      window.location.href = url.toString();
    });
  }

  // Specialties carousel - continuous animation
  const track = document.getElementById('specialties-track');
  const prev = document.getElementById('sp-prev');
  const next = document.getElementById('sp-next');

  if (track) {
    // Duplicate children for seamless loop
    const items = Array.from(track.children);
    items.forEach(node => track.appendChild(node.cloneNode(true)));

    // Calculate duration based on content width for consistent speed
    const viewport = track.parentElement;
    const halfWidth = track.scrollWidth / 2; // width of original set
    const speedPxPerSec = 90; // adjust for desired speed
    const duration = Math.max(20, Math.round(halfWidth / speedPxPerSec));
    track.style.setProperty('--scroll-duration', duration + 's');
    track.classList.add('is-animating');

    // Pause on hover
    const pause = () => track.style.animationPlayState = 'paused';
    const resume = () => track.style.animationPlayState = 'running';
    viewport.addEventListener('mouseenter', pause);
    viewport.addEventListener('mouseleave', resume);

    // Optional nudge controls
    function nudge(dir) {
      // Temporarily pause and translate, then resume
      pause();
      const current = getComputedStyle(track).transform;
      // Fallback if matrix is none
      let offset = 0;
      if (current !== 'none') {
        const m = new DOMMatrix(current);
        offset = m.m41; // translateX value
      }
      const delta = dir > 0 ? -200 : 200;
      track.style.transform = `translateX(${offset + delta}px)`;
      setTimeout(resume, 300);
    }
    if (prev) prev.addEventListener('click', () => nudge(-1));
    if (next) next.addEventListener('click', () => nudge(1));
  }

  // Doctor search page demo behavior
  const form = document.getElementById('doctor-search-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const results = document.getElementById('doctor-results');
      if (results) {
        results.textContent = 'Sample results: Dr. Smith (Cardiology), Dr. Lee (Dermatology)';
      }
    });
  }
});

//patient login 
