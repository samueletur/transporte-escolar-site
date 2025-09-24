// Mobile menu functionality
function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');
  
  if (mobileMenu.classList.contains('active')) {
    mobileMenu.classList.remove('active');
    menuIcon.style.display = 'inline-block';
    closeIcon.style.display = 'none';
  } else {
    mobileMenu.classList.add('active');
    menuIcon.style.display = 'none';
    closeIcon.style.display = 'inline-block';
  }
}

// Close mobile menu when clicking on a link
function closeMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');
  
  mobileMenu.classList.remove('active');
  menuIcon.style.display = 'inline-block';
  closeIcon.style.display = 'none';
}

// Smooth scroll to sections
function smoothScroll(targetId) {
  const element = document.getElementById(targetId);
  if (element) {
    element.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  // Add event listeners for mobile menu
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  if (mobileMenuButton) {
    mobileMenuButton.addEventListener('click', toggleMobileMenu);
  }
  
  // Add event listeners for mobile menu links
  const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
  mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });
  
  // Add smooth scrolling to navigation links
  const navLinks = document.querySelectorAll('a[href^="#"]');
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      smoothScroll(targetId);
    });
  });
  
  // Add scroll effect to header
  const header = document.querySelector('.header');
  let lastScrollTop = 0;
  
  window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > 100) {
      header.style.backgroundColor = 'hsl(var(--background) / 0.98)';
      header.style.backdropFilter = 'blur(12px)';
    } else {
      header.style.backgroundColor = 'hsl(var(--background) / 0.95)';
      header.style.backdropFilter = 'blur(8px)';
    }
    
    lastScrollTop = scrollTop;
  });
  
  // Add animation on scroll for cards
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);
  
  // Observe cards and feature items for animation
  const animatedElements = document.querySelectorAll('.card, .feature-card, .benefit-item');
  animatedElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease-out';
    observer.observe(el);
  });
  
  // Counter animation for hero stats
  function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    function updateCounter() {
      start += increment;
      if (start < target) {
        element.textContent = Math.floor(start);
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target;
      }
    }
    updateCounter();
  }
  
  // Animate hero stats when they come into view
  const heroStats = document.querySelectorAll('.hero-stat-value');
  const heroStatsObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const text = entry.target.textContent;
        const number = parseInt(text.replace(/\D/g, ''));
        if (number) {
          entry.target.textContent = '0';
          setTimeout(() => {
            animateCounter(entry.target, number);
          }, 500);
        }
        heroStatsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  
  heroStats.forEach(stat => {
    heroStatsObserver.observe(stat);
  });
  
  // Add hover effects to buttons
  const buttons = document.querySelectorAll('.btn');
  buttons.forEach(button => {
    button.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-2px)';
    });
    
    button.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
    });
  });
  
  // Add parallax effect to hero section (optional)
  const hero = document.querySelector('.hero');
  if (hero) {
    window.addEventListener('scroll', function() {
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;
      hero.style.transform = `translateY(${rate}px)`;
    });
  }
});

// Utility functions for form handling (if needed later)
function validateForm(formId) {
  const form = document.getElementById(formId);
  if (!form) return false;
  
  const inputs = form.querySelectorAll('input[required], textarea[required]');
  let isValid = true;
  
  inputs.forEach(input => {
    if (!input.value.trim()) {
      input.style.borderColor = 'hsl(var(--destructive))';
      isValid = false;
    } else {
      input.style.borderColor = 'hsl(var(--border))';
    }
  });
  
  return isValid;
}

// Newsletter subscription (placeholder)
function subscribeNewsletter(email) {
  // This would typically send data to a server
  console.log('Newsletter subscription for:', email);
  alert('Obrigado por se inscrever! Você receberá nossas atualizações em breve.');
}

// Contact form submission (placeholder)
function submitContactForm(formData) {
  // This would typically send data to a server
  console.log('Contact form submission:', formData);
  alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
}