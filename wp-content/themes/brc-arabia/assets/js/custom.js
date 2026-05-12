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

    // if already open - close it
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

  // Megamenu toggle function
  $('.megaToggleIcon').on('click', function () {
    $(this).toggleClass('megaActive');
    $('#headerMain').toggleClass('megaOpen');
  });

  // Footer nav toggle
  if (window.innerWidth <= 768) {
    $('.navLabel').on('click', function () {
      $(this).next('.navList').slideToggle(300);
      $(this).toggleClass('show');
    });
  }

  // Click to scroll to section
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
    rootMargin: "-40% 0px -40% 0px", // trigger when section is centered
    threshold: 0
  }
);

// observe all sections
sections.forEach((section) => observer.observe(section));

// Product menu preview function
// const items = document.querySelectorAll('.leftNav .menu > li > a.has-preview');
// const preview = document.querySelector('.menu-preview');
// const img = preview.querySelector('img');
// const btn = preview.querySelector('a');

// let activeItem = null;
// let timeout;

// items.forEach(item => {

//   item.addEventListener('mouseenter', () => {
//     clearTimeout(timeout);

//     // remove previous active
//     items.forEach(i => i.classList.remove('active-link'));

//     activeItem = item;
//     item.classList.add('active-link');

//     const rect = item.getBoundingClientRect();
//     const parentRect = item.closest('.leftNav').getBoundingClientRect();

//     img.src = item.dataset.img;
//     if (btn) btn.href = item.dataset.link;

//     preview.style.left = (rect.left - parentRect.left) + 'px';
//     // preview.style.top = (rect.bottom - parentRect.top) + 'px';

//     preview.classList.add('show');
//     const previewWidth = preview.offsetWidth;
//     const itemWidth = rect.width;

//     preview.style.left =
//       (rect.left - parentRect.left) + (itemWidth / 2) - (previewWidth / 2) + 'px';
//   });

//   item.addEventListener('mouseleave', () => {
//     timeout = setTimeout(() => {
//       if (!preview.matches(':hover')) {
//         preview.classList.remove('show');

//         if (activeItem) {
//           activeItem.classList.remove('active-link');
//           activeItem = null;
//         }
//       }
//     }, 150);
//   });
// });

// keep active while hovering preview
// preview.addEventListener('mouseenter', () => {
//   clearTimeout(timeout);
// });

// preview.addEventListener('mouseleave', () => {
//   preview.classList.remove('show');

//   if (activeItem) {
//     activeItem.classList.remove('active-link');
//     activeItem = null;
//   }
// });

document.addEventListener("DOMContentLoaded", () => {
  /*
  ====================================
  HOVER DESKTOP + CLICK MOBILE
  ====================================
  */

  const items = document.querySelectorAll(".hoverListitem li");

  items.forEach((item) => {

    function activateHoverItem() {

      const currentSlide = item.closest(".swiper-slide");

      if (!currentSlide) return;

      // remove active image class
      currentSlide
        .querySelectorAll(".hovermainimg .hoverImg")
        .forEach((img) => {
          img.classList.remove("activeimghover");
        });

      // remove active li class
      currentSlide
        .querySelectorAll(".hoverListitem li")
        .forEach((li) => {
          li.classList.remove("activeHoverItem");
        });

      // active current li
      item.classList.add("activeHoverItem");

      // get matching class
      const matchedClass = [...item.classList]
        .find(cls => cls.startsWith("hoverImg"));

      if (!matchedClass) return;

      // target image
      const targetImg = currentSlide.querySelector(
        ".hovermainimg img." + matchedClass
      );

      // add active class
      if (targetImg) {
        targetImg.classList.add("activeimghover");
      }

    }


    function removeHoverItem() {

      const currentSlide = item.closest(".swiper-slide");

      if (!currentSlide) return;

      // remove active image class
      currentSlide
        .querySelectorAll(".hovermainimg .hoverImg")
        .forEach((img) => {
          img.classList.remove("activeimghover");
        });

      // remove active li class
      currentSlide
        .querySelectorAll(".hoverListitem li")
        .forEach((li) => {
          li.classList.remove("activeHoverItem");
        });

    }


    /*
    ==========================
    DESKTOP HOVER
    ==========================
    */

    item.addEventListener("mouseenter", () => {

      if (window.innerWidth > 991) {
        activateHoverItem();
      }

    });

    item.addEventListener("mouseleave", () => {

      if (window.innerWidth > 991) {
        removeHoverItem();
      }

    });


    /*
    ==========================
    MOBILE CLICK
    ==========================
    */

    item.addEventListener("pointerdown", (e) => {

      if (window.innerWidth <= 991) {

        e.stopPropagation();
        activateHoverItem();

      }

    });

  });



  /*
  ====================================
  SWIPER
  ====================================
  */

  const swiper = new Swiper(".qualityslider", {

    loop: true,

    navigation: {
      nextEl: ".qualityslider .swiper-button-next",
      prevEl: ".qualityslider .swiper-button-prev",
    },

    on: {

      // init: function () {
      //   updateArrowTitles(this);
      // },

      // slideChange: function () {
      //   updateArrowTitles(this);
      // }

    }

  });

  /*
  ====================================
  UPDATE LABELS
  ====================================
  */

  // function updateArrowTitles(swiper) {

  //   const realSlides = [...swiper.slides].filter(slide => {
  //     return !slide.classList.contains("swiper-slide-duplicate");
  //   });

  //   const currentRealIndex = swiper.realIndex;

  //   let prevIndex = currentRealIndex - 1;
  //   let nextIndex = currentRealIndex + 1;

  //   if (prevIndex < 0) {
  //     prevIndex = realSlides.length - 1;
  //   }

  //   if (nextIndex >= realSlides.length) {
  //     nextIndex = 0;
  //   }

  //   const prevTitle =
  //     realSlides[prevIndex].getAttribute("data-title");

  //   const nextTitle =
  //     realSlides[nextIndex].getAttribute("data-title");

  //   document.querySelector(".prevTitle").textContent = prevTitle;
  //   document.querySelector(".nextTitle").textContent = nextTitle;
  // }

});

// Stikcy Header function
const header = document.querySelector('.mainHeader');
const body = document.body;

const isHome = body.classList.contains('home');
const banner = document.querySelector('.homeBanner');

const headerHeight = header.offsetHeight;

let lastScroll = 0;

window.addEventListener('scroll', () => {

  const currentScroll = window.pageYOffset;

  // homepage trigger = banner height
  // inner pages trigger = 100
  const triggerPoint = isHome && banner
    ? banner.offsetHeight
    : 100;

  // =========================
  // RESET TO NORMAL HEADER
  // =========================
  if (
    header.classList.contains('stickyHeader') &&
    currentScroll <= (triggerPoint + headerHeight)
  ) {

    header.classList.add('hideSticky');

    setTimeout(() => {

      header.classList.remove('stickyHeader');
      header.classList.remove('hideSticky');

      // remove spacing for inner pages
      if (!isHome) {
        document.body.style.paddingTop = '';
      }

    }, 350);

    lastScroll = currentScroll;

    return;
  }

  // =========================
  // SCROLLING UP
  // =========================
  if (
    currentScroll > triggerPoint &&
    currentScroll < lastScroll
  ) {

    header.classList.add('stickyHeader');

    // spacing for inner pages
    if (!isHome) {
      document.body.style.paddingTop =
        headerHeight + 'px';
    }

    requestAnimationFrame(() => {
      header.classList.remove('hideSticky');
    });

  }

  // =========================
  // SCROLLING DOWN
  // =========================
  else {

    // only hide if sticky is active
    if (header.classList.contains('stickyHeader')) {

      header.classList.add('hideSticky');

      setTimeout(() => {

        if (header.classList.contains('hideSticky')) {

          header.classList.remove('stickyHeader');

          if (!isHome) {
            document.body.style.paddingTop = '';
          }

        }

      }, 350);

    }

  }

  lastScroll = currentScroll <= 0
    ? 0
    : currentScroll;

});

// Swiper for projects in mobile view only
let newsSwiper;

function initNewsSlider() {

  if (window.innerWidth <= 991) {

    if (!newsSwiper) {

      newsSwiper = new Swiper(".newsSlider", {
        slidesPerView: 1.8,
        spaceBetween: 5,
        navigation: {
          nextEl: '.newsSwiperNav .swiper-button-next',
          prevEl: '.newsSwiperNav .swiper-button-prev',
        },
        mousewheel: {
          enabled: true,
          releaseOnEdges: true, // allow page scroll when at first/last slide
          sensitivity: 1,       // optional: adjust scroll sensitivity
        },
        breakpoints: {
          0: {
            slidesPerView: 1.2,
          },
          500: {
            slidesPerView: 2.1,
          },
        },
      });

    }

  } else {

    if (newsSwiper) {
      newsSwiper.destroy(true, true);
      newsSwiper = undefined;
    }

  }

}

initNewsSlider();

window.addEventListener('resize', initNewsSlider);