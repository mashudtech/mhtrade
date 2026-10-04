/**
 * MH Trade Capital Solutions — Main Interactive Script
 * - Animated Node Network Canvas
 * - Sticky Header Scroll Effects
 * - Dynamic Verticals & Inquiry Modal Management
 * - Client-Side Request ID Preview Generation
 */

document.addEventListener('DOMContentLoaded', () => {

  // Initialize Animated Background Canvas
  initBackgroundCanvas();

  // Header Scroll Effect & Back-to-Top Button Toggle
  const header = document.querySelector('.main-header');
  const backToTopBtn = document.getElementById('back-to-top');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }

    if (window.scrollY > 300) {
      backToTopBtn?.classList.add('visible');
    } else {
      backToTopBtn?.classList.remove('visible');
    }
  });

  backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // Verticals Slider Controls Handler (Unlimited Infinite Loop + Auto-Play)
  const verticalsGridWrapper = document.querySelector('.verticals-grid-wrapper');
  const verticalsPrevBtn = document.getElementById('verticals-prev');
  const verticalsNextBtn = document.getElementById('verticals-next');

  function slideNext() {
    if (!verticalsGridWrapper) return;
    const card = verticalsGridWrapper.querySelector('.vertical-card');
    const scrollAmount = (card?.offsetWidth || 300) + 24;
    const maxScroll = verticalsGridWrapper.scrollWidth - verticalsGridWrapper.clientWidth;

    if (verticalsGridWrapper.scrollLeft >= maxScroll - 15) {
      verticalsGridWrapper.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      verticalsGridWrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
  }

  function slidePrev() {
    if (!verticalsGridWrapper) return;
    const card = verticalsGridWrapper.querySelector('.vertical-card');
    const scrollAmount = (card?.offsetWidth || 300) + 24;
    const maxScroll = verticalsGridWrapper.scrollWidth - verticalsGridWrapper.clientWidth;

    if (verticalsGridWrapper.scrollLeft <= 15) {
      verticalsGridWrapper.scrollTo({ left: maxScroll, behavior: 'smooth' });
    } else {
      verticalsGridWrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
  }

  verticalsNextBtn?.addEventListener('click', () => {
    slideNext();
    resetAutoSlide();
  });

  verticalsPrevBtn?.addEventListener('click', () => {
    slidePrev();
    resetAutoSlide();
  });

  // Auto-slide loop every 4 seconds
  let autoSlideTimer = setInterval(slideNext, 4000);

  function resetAutoSlide() {
    clearInterval(autoSlideTimer);
    autoSlideTimer = setInterval(slideNext, 4000);
  }

  // Pause auto-slide when hovering over slider or controls
  verticalsGridWrapper?.addEventListener('mouseenter', () => clearInterval(autoSlideTimer));
  verticalsGridWrapper?.addEventListener('mouseleave', () => resetAutoSlide());
  verticalsGridWrapper?.addEventListener('touchstart', () => clearInterval(autoSlideTimer), { passive: true });
  verticalsGridWrapper?.addEventListener('touchend', () => resetAutoSlide());

  // Testimonials Single-Item Slider Handler (Infinite Loop + Auto-Play)
  const testimonialTrack = document.getElementById('testimonials-track');
  const testimonialPrevBtn = document.getElementById('testimonial-prev');
  const testimonialNextBtn = document.getElementById('testimonial-next');
  const testimonialDots = document.querySelectorAll('#testimonial-dots .dot');
  let currentTestimonialIndex = 0;

  function updateTestimonialSlide(index) {
    if (!testimonialTrack) return;
    const slides = testimonialTrack.querySelectorAll('.testimonial-slide');
    if (slides.length === 0) return;
    currentTestimonialIndex = (index + slides.length) % slides.length;
    testimonialTrack.style.transform = `translateX(-${currentTestimonialIndex * 100}%)`;

    testimonialDots.forEach((dot, idx) => {
      if (idx === currentTestimonialIndex) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  testimonialNextBtn?.addEventListener('click', () => {
    updateTestimonialSlide(currentTestimonialIndex + 1);
    resetTestimonialAutoSlide();
  });

  testimonialPrevBtn?.addEventListener('click', () => {
    updateTestimonialSlide(currentTestimonialIndex - 1);
    resetTestimonialAutoSlide();
  });

  testimonialDots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      updateTestimonialSlide(idx);
      resetTestimonialAutoSlide();
    });
  });

  // Auto-play infinite loop every 5 seconds
  let testimonialTimer = setInterval(() => {
    updateTestimonialSlide(currentTestimonialIndex + 1);
  }, 5000);

  function resetTestimonialAutoSlide() {
    clearInterval(testimonialTimer);
    testimonialTimer = setInterval(() => {
      updateTestimonialSlide(currentTestimonialIndex + 1);
    }, 5000);
  }

  const testimonialWrapper = document.querySelector('.testimonials-slider-wrapper');
  testimonialWrapper?.addEventListener('mouseenter', () => clearInterval(testimonialTimer));
  testimonialWrapper?.addEventListener('mouseleave', () => resetTestimonialAutoSlide());
  testimonialWrapper?.addEventListener('touchstart', () => clearInterval(testimonialTimer), { passive: true });
  testimonialWrapper?.addEventListener('touchend', () => resetTestimonialAutoSlide());

  // Modal Drawer Elements
  const modalOverlay = document.getElementById('inquiry-modal');
  const closeModalBtns = document.querySelectorAll('.close-modal');
  const openModalBtns = document.querySelectorAll('.open-inquiry-modal');
  const verticalSelect = document.getElementById('req-vertical');
  const inquiryForm = document.getElementById('inquiry-form');
  const modalFormContainer = document.getElementById('modal-form-container');
  const modalSuccessContainer = document.getElementById('modal-success-container');
  const assignedIdDisplay = document.getElementById('assigned-request-id');

  // Open Modal Handler
  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetVertical = btn.getAttribute('data-vertical') || 'general';
      if (verticalSelect) {
        verticalSelect.value = targetVertical;
      }
      resetFormState();
      modalOverlay?.classList.add('active');
    });
  });

  // Close Modal Handler
  closeModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      modalOverlay?.classList.remove('active');
    });
  });

  // Light dismiss on backdrop click
  modalOverlay?.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.remove('active');
    }
  });

  // Quick Hero Ingestion Form Handler
  const heroIngestionForm = document.getElementById('hero-ingestion-form');
  heroIngestionForm?.addEventListener('submit', (e) => {
    e.preventDefault();
    const selectedVertical = document.getElementById('hero-vertical-select')?.value || 'general';
    if (verticalSelect) {
      verticalSelect.value = selectedVertical;
    }
    resetFormState();
    modalOverlay?.classList.add('active');
  });

  // Inquiry Form Submission (Interactive Preview Response)
  inquiryForm?.addEventListener('submit', (e) => {
    e.preventDefault();

    const selectedVertical = verticalSelect ? verticalSelect.value : 'general';
    const generatedId = generateRequestId(selectedVertical);

    // Show Assigned Request ID
    if (assignedIdDisplay) {
      assignedIdDisplay.textContent = generatedId;
    }

    // Toggle Form to Success Screen
    if (modalFormContainer && modalSuccessContainer) {
      modalFormContainer.style.display = 'none';
      modalSuccessContainer.style.display = 'block';
    }
  });

  function resetFormState() {
    if (modalFormContainer && modalSuccessContainer) {
      modalFormContainer.style.display = 'block';
      modalSuccessContainer.style.display = 'none';
    }
    inquiryForm?.reset();
  }

  // Sequential Non-Date Request ID Generator Preview
  function generateRequestId(vertical) {
    const prefixes = {
      'lc': 'MH-LC',
      'sblc': 'MH-SBLC',
      'commodity': 'MH-COM',
      'project': 'MH-PROJ',
      'uae-banking': 'MH-BANK',
      'general': 'MH-REQ'
    };
    const prefix = prefixes[vertical] || 'MH-REQ';
    const randomSeq = String(Math.floor(Math.random() * 900) + 100).padStart(5, '0');
    return `${prefix}-${randomSeq}`;
  }

  // Background Canvas Node Network Simulation
  function initBackgroundCanvas() {
    const canvas = document.getElementById('bg-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    });

    const numNodes = Math.min(Math.floor(width / 25), 45);
    const nodes = [];

    for (let i = 0; i < numNodes; i++) {
      nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.4,
        vy: (Math.random() - 0.5) * 0.4,
        radius: Math.random() * 2 + 1
      });
    }

    function animate() {
      ctx.clearRect(0, 0, width, height);

      // Draw Nodes
      for (let i = 0; i < nodes.length; i++) {
        const n = nodes[i];
        n.x += n.vx;
        n.y += n.vy;

        if (n.x < 0 || n.x > width) n.vx *= -1;
        if (n.y < 0 || n.y > height) n.vy *= -1;

        ctx.beginPath();
        ctx.arc(n.x, n.y, n.radius, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(212, 175, 55, 0.4)';
        ctx.fill();

        // Connect Nodes
        for (let j = i + 1; j < nodes.length; j++) {
          const n2 = nodes[j];
          const dist = Math.hypot(n.x - n2.x, n.y - n2.y);
          if (dist < 140) {
            ctx.beginPath();
            ctx.moveTo(n.x, n.y);
            ctx.lineTo(n2.x, n2.y);
            ctx.strokeStyle = `rgba(212, 175, 55, ${0.25 * (1 - dist / 140)})`;
            ctx.lineWidth = 0.8;
            ctx.stroke();
          }
        }
      }

      requestAnimationFrame(animate);
    }

    animate();
  }

});
