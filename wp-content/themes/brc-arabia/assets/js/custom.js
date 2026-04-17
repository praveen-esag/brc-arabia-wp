// Custom Scripts

jQuery(document).ready(function ($) {
    //toggle the component with class accordion_body
    $(".faqHead").click(function () {
        if ($('.faqDesc').is(':visible')) {
            $(".faqDesc").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".faqDesc").is(':visible')) {
            $(this).next(".faqDesc").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".faqDesc").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});

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
            sscrub: 2,
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
