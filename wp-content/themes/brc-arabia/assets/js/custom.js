// Custom Scripts

jQuery(document).ready(function ($) {

  //FAQ toggle function
  // $(".faqHead").click(function () {
  //   $('.faqItem').removeClass('activeFaq');
  //   $(this).parent().addClass('activeFaq');
  //   if ($('.faqDesc').is(':visible')) {
  //     $(".faqDesc").slideUp(300);
  //     // $(".plusminus").removeClass('faqOpen');
  //   }
  //   if ($(this).next(".faqDesc").is(':visible')) {
  //     $(this).next(".faqDesc").slideUp(300);
  //     // $(this).children(".plusminus").addClass('faqOpen');
  //   } else {
  //     $(this).next(".faqDesc").slideDown(300);
  //     // $(this).children(".plusminus").removeClass('faqOpen');
  //   }
  // });
  $(".faqHead").click(function () {
    const parent = $(this).parent();
    const desc = $(this).next(".faqDesc");

    // if already open → close it
    if (parent.hasClass("activeFaq")) {
      parent.removeClass("activeFaq");
      desc.slideUp(300);
    } else {
      // close others
      $(".faqItem").removeClass("activeFaq");
      $(".faqDesc").slideUp(300);

      // open this one
      parent.addClass("activeFaq");
      desc.slideDown(300);
    }
  });

  // Resources tab function
  $('.resoItem').on('mouseenter click', function () {
    var tabId = $(this).data('tab');

    $('.resoItem').removeClass('active');
    $(this).addClass('active');

    $('.resoSubItem').removeClass('active');
    $('.resoSubItem[data-tab="' + tabId + '"]').addClass('active');
  });

  $('.dwnldReso').on('mouseenter click', function () {
    $('.dwnldReso').removeClass('active');
    $(this).addClass('active');
  });

  // Mobile menu toggle
  $('.toggleIcon').on('click', function () {
    $(this).toggleClass('active');
    $('#headerMain').toggleClass('menu-open');
    $('body').toggleClass('nav-open');
  });
  $(document).on('click', function (e) {
    if (!$(e.target).closest('#headerMain').length) {
      $('.toggleIcon').removeClass('active');
      $('#headerMain').removeClass('menu-open');
      $('body').removeClass('nav-open');
    }
  });

  // Footer nav toggle
  if (window.innerWidth <= 768) {
    $('.navLabel').on('click', function () {
      $(this).next('.navList').slideToggle(300);
      $(this).toggleClass('show');
    });
  }

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = $($(this).attr('href'));

    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top - 50
      }, 100);
    }
  });

}); // document.ready function end

const element = document.querySelectorAll('.qualItem');
element.forEach(element => {

  element.addEventListener('mouseenter', () => {
    element.classList.add('show');
  });

  element.addEventListener('mouseleave', () => {
    element.classList.remove('show');
  });

});

// vision mission section animation

gsap.registerPlugin(ScrollTrigger);
const mm = gsap.matchMedia();

mm.add("(min-width: 992px)", () => {

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".vismisSec",
      start: "top 30%",
      end: "bottom 20%",
      scrub: 2,
      invalidateOnRefresh: true,
      // markers: true
    }
  });
  window.addEventListener("load", () => {
    ScrollTrigger.refresh();
  });

  tl.to(".visCont", {
    x: "30%",
    // scaleX: 1.25,
    transformOrigin: "left center",
    zIndex: 3,
    duration: 1.5,
    ease: "power3.out"
  }, 0);

  tl.to(".misCont", {
    x: "60%",
    // scaleX: 1.6,
    transformOrigin: "left center",
    zIndex: 4,
    duration: 1.5,
    ease: "power3.out"
  }, 0.15);
});

// Products page projects slider
const relProjList = new Swiper('.relProjList', {
  //   freeMode: true,
  slidesPerView: 3.8,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  mousewheel: {
    enabled: true,
    releaseOnEdges: true, // allow page scroll when at first/last slide
    sensitivity: 1,       // optional: adjust scroll sensitivity
  },
  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2.3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3.8,
      spaceBetween: 20,
    },
  },
});

const sections = document.querySelectorAll(".productInner section");
const navLinks = document.querySelectorAll(".floatNavItem a");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute("id");

        navLinks.forEach((link) => {
          link.classList.remove("active");

          if (link.getAttribute("href") === "#" + id) {
            link.classList.add("active");
          }
        });
      }
    });
  },
  {
    root: null,
    rootMargin: "-40% 0px -40% 0px", // 🔥 trigger when section is centered
    threshold: 0
  }
);

// observe all sections
sections.forEach((section) => observer.observe(section));

// Product menu preview function
const items = document.querySelectorAll('.leftNav .menu > li > a.has-preview');
const preview = document.querySelector('.menu-preview');
const img = preview.querySelector('img');
const btn = preview.querySelector('a');

let activeItem = null;
let timeout;

items.forEach(item => {

  item.addEventListener('mouseenter', () => {
    clearTimeout(timeout);

    // remove previous active
    items.forEach(i => i.classList.remove('active-link'));

    activeItem = item;
    item.classList.add('active-link');

    const rect = item.getBoundingClientRect();
    const parentRect = item.closest('.leftNav').getBoundingClientRect();

    img.src = item.dataset.img;
    if (btn) btn.href = item.dataset.link;

    preview.style.left = (rect.left - parentRect.left) + 'px';
    // preview.style.top = (rect.bottom - parentRect.top) + 'px';

    preview.classList.add('show');
    const previewWidth = preview.offsetWidth;
    const itemWidth = rect.width;

    preview.style.left =
      (rect.left - parentRect.left) + (itemWidth / 2) - (previewWidth / 2) + 'px';
  });

  item.addEventListener('mouseleave', () => {
    timeout = setTimeout(() => {
      if (!preview.matches(':hover')) {
        preview.classList.remove('show');

        if (activeItem) {
          activeItem.classList.remove('active-link');
          activeItem = null;
        }
      }
    }, 150);
  });
});

// keep active while hovering preview
preview.addEventListener('mouseenter', () => {
  clearTimeout(timeout);
});

preview.addEventListener('mouseleave', () => {
  preview.classList.remove('show');

  if (activeItem) {
    activeItem.classList.remove('active-link');
    activeItem = null;
  }
});