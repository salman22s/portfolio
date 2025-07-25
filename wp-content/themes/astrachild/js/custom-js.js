// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const section = document.querySelector(this.getAttribute('href'));
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }

    // If link is inside mobileNav, close the menu
    if (mobileNav.contains(this)) {
      mobileNav.classList.remove('active');
      document.body.style.overflow = ''; // Re-enable scroll
      document.removeEventListener('click', handleOutsideClick);
    }
  });
});

const hamburgerBtn = document.getElementById('hamburgerBtn');
const mobileNav = document.getElementById('mobileNav');

// Show/hide hamburger based on screen size
function toggleHamburgerVisibility() {
  if (window.innerWidth <= 650) {
    hamburgerBtn.style.display = 'block';
  } else {
    hamburgerBtn.style.display = 'none';
    mobileNav.classList.remove('active');
    document.body.style.overflow = ''; // Re-enable scroll if menu is closed on resize
    document.removeEventListener('click', handleOutsideClick);
  }
}

// Toggle mobile nav menu
function clickHamburger(e) {
  e.stopPropagation(); // Prevent the menu from closing immediately

  mobileNav.classList.toggle('active');

  if (mobileNav.classList.contains('active')) {
    document.body.style.overflow = 'hidden'; // Disable scrolling
    document.addEventListener('click', handleOutsideClick);
  } else {
    document.body.style.overflow = ''; // Enable scrolling
    document.removeEventListener('click', handleOutsideClick);
  }
}

// Close mobile menu when clicking outside
function handleOutsideClick(event) {
  if (
    !mobileNav.contains(event.target) &&
    !hamburgerBtn.contains(event.target)
  ) {
    mobileNav.classList.remove('active');
    document.body.style.overflow = ''; // Re-enable scroll
    document.removeEventListener('click', handleOutsideClick);
  }
}

// Setup
if (hamburgerBtn) {
  hamburgerBtn.addEventListener('click', clickHamburger);
}

toggleHamburgerVisibility();
window.addEventListener('resize', toggleHamburgerVisibility);
