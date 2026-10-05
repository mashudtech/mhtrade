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

  // Dynamic Background Canvas — Global Financial Constellation Network
  function initBackgroundCanvas() {
    const canvas = document.getElementById('bg-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    let mouse = { x: null, y: null, radius: 180 };

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    });

    window.addEventListener('mousemove', (e) => {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });

    window.addEventListener('mouseleave', () => {
      mouse.x = null;
      mouse.y = null;
    });

    // Create dynamic nodes based on screen resolution
    const numNodes = Math.min(Math.floor(width / 18), 70);
    const nodes = [];

    for (let i = 0; i < numNodes; i++) {
      const isMajorHub = Math.random() < 0.25;
      nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.55,
        vy: (Math.random() - 0.5) * 0.55,
        radius: isMajorHub ? Math.random() * 2 + 2.5 : Math.random() * 1.5 + 1.2,
        isMajorHub: isMajorHub,
        pulseAngle: Math.random() * Math.PI * 2,
        color: isMajorHub ? '#F59E0B' : '#D4AF37'
      });
    }

    function animate() {
      ctx.clearRect(0, 0, width, height);

      // Draw & update nodes
      for (let i = 0; i < nodes.length; i++) {
        const n = nodes[i];
        n.x += n.vx;
        n.y += n.vy;
        n.pulseAngle += 0.03;

        if (n.x < 0 || n.x > width) n.vx *= -1;
        if (n.y < 0 || n.y > height) n.vy *= -1;

        // Pulse effect for major hub nodes
        let currentRadius = n.radius;
        if (n.isMajorHub) {
          currentRadius += Math.sin(n.pulseAngle) * 0.8;
        }

        // Draw node glow
        ctx.save();
        ctx.beginPath();
        ctx.arc(n.x, n.y, Math.max(0.5, currentRadius), 0, Math.PI * 2);
        ctx.fillStyle = n.isMajorHub ? 'rgba(245, 158, 11, 0.85)' : 'rgba(212, 175, 55, 0.65)';
        if (n.isMajorHub) {
          ctx.shadowBlur = 12;
          ctx.shadowColor = 'rgba(245, 158, 11, 0.7)';
        }
        ctx.fill();
        ctx.restore();

        // Connect node to mouse if within distance
        if (mouse.x !== null && mouse.y !== null) {
          const mDist = Math.hypot(n.x - mouse.x, n.y - mouse.y);
          if (mDist < mouse.radius) {
            const mAlpha = 0.5 * (1 - mDist / mouse.radius);
            ctx.beginPath();
            ctx.moveTo(n.x, n.y);
            ctx.lineTo(mouse.x, mouse.y);
            ctx.strokeStyle = `rgba(245, 158, 11, ${mAlpha})`;
            ctx.lineWidth = 1.2;
            ctx.stroke();
          }
        }

        // Connect nodes to neighboring nodes
        for (let j = i + 1; j < nodes.length; j++) {
          const n2 = nodes[j];
          const dist = Math.hypot(n.x - n2.x, n.y - n2.y);
          const maxDist = 170;

          if (dist < maxDist) {
            const alpha = 0.45 * (1 - dist / maxDist);
            ctx.beginPath();
            ctx.moveTo(n.x, n.y);
            ctx.lineTo(n2.x, n2.y);
            ctx.strokeStyle = `rgba(212, 175, 55, ${alpha})`;
            ctx.lineWidth = n.isMajorHub && n2.isMajorHub ? 1.2 : 0.85;
            ctx.stroke();
          }
        }
      }

      requestAnimationFrame(animate);
    }

    animate();
  }

});
