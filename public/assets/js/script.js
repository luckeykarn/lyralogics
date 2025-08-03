(function ($) {
  "use strict";

  // Dependency checks
  const dependencies = {
    gsap: typeof gsap !== 'undefined',
    ScrollTrigger: typeof ScrollTrigger !== 'undefined',
    SplitText: typeof SplitText !== 'undefined',
    AOS: typeof AOS !== 'undefined',
    Swiper: typeof Swiper !== 'undefined',
    owlCarousel: typeof $.fn.owlCarousel !== 'undefined',
    marquee: typeof $.fn.marquee !== 'undefined',
    magnificPopup: typeof $.fn.magnificPopup !== 'undefined',
    isotope: typeof $.fn.isotope !== 'undefined',
    countdown: typeof $.fn.countdown !== 'undefined',
    appear: typeof $.fn.appear !== 'undefined',
    validate: typeof $.fn.validate !== 'undefined',
    ajaxChimp: typeof $.fn.ajaxChimp !== 'undefined',
    niceSelect: typeof $.fn.niceSelect !== 'undefined',
    circleType: typeof $.fn.circleType !== 'undefined',
    WOW: typeof WOW !== 'undefined'
  };

  // Cached jQuery selectors
  const $window = $(window);
  const $document = $(document);
  const $body = $('body');
  const $preloader = $('.js-preloader');
  const $fullHeight = $('.full-height');
  const $portfolioTwoBoxLi = $('.portfolio-two__box li');
  const $countBar = $('.count-bar');
  const $countBox = $('.count-box');
  const $accrodionGrp = $('.accrodion-grp');
  const $mcForm = $('.mc-form');
  const $videoPopup = $('.video-popup');
  const $imgPopup = $('.img-popup');
  const $comingSoonCountdown = $('.coming-soon-countdown');
  const $eventOneCountdown = $('.event-one-countdown');
  const $mainMenuList = $('.main-menu__list');
  const $mobileNavContainer = $('.mobile-nav__container');
  const $stickyHeaderContent = $('.sticky-header__content');
  const $mobileNavToggler = $('.mobile-nav__toggler');
  const $searcherTogglerBox = $('.searcher-toggler-box');
  const $closeSearch = $('.close-search');
  const $searchPopupColorLayer = $('.search-popup .color-layer');
  const $odometer = $('.odometer');
  const $wow = $('.wow');
  const $tabsBox = $('.tabs-box');
  const $postFilter = $('.post-filter');
  const $postFilterDynamic = $('.post-filter.has-dynamic-filters-counter');
  const $masonaryLayout = $('.masonary-layout');
  const $filterLayout = $('.filter-layout');
  const $portfolioOneCurvedCircle = $('.portfolio-one__curved-circle');
  const $servicesTwoCurvedCircle = $('.services-two__curved-circle');
  const $scrollToTop = $('.scroll-to-top');
  const $strickedMenu = $('.stricked-menu');
  const $stickyHeaderOnePage = $('.sticky-header--one-page');
  const $priceRanger = $('.price-ranger');
  const $add = $('.add');
  const $sub = $('.sub');
  const $checkoutPaymentTitle = $('.checkout__payment__title');
  const $productAllTab = $('.product__all-tab');
  const $relatedProductsCarousel = $('.related-products__carousel');
  const $marqueeMode = $('.marquee_mode');
  const $marqueeMode2 = $('.marquee_mode-2');
  const $contactFormValidated = $('.contact-form-validated');
  const $teamCarouselStyle = $('.team-carousel-style');
  const $servicesCarouselStyle = $('.services-carousel-style');
  const $testimonialsCarouselStyle = $('.testimonials-carousel-style');
  const $blogCarouselStyle = $('.blog-carousel-style');
  const $portfolioTwoCarousel = $('.portfolio-two__carousel');
  const $portfolioOneCarousel = $('.portfolio-one__carousel');
  const $testimonialTwoCarousel = $('.testimonial-two__carousel');
  const $teamTwoCarousel = $('.team-two__carousel');
  const $servicesThreeCarousel = $('.services-three__carousel');
  const $teamOneCarousel = $('.team-one__carousel');
  const $blogOneCarousel = $('.blog-one__carousel');
  const $brandTwoCarousel = $('.brand-two__carousel');
  const $brandOneCarousel = $('.brand-one__carousel');
  const $testimonialOneCarousel = $('.testimonial-one__carousel');

  // Debounce function
  const debounce = (func, wait) => {
    let timeout;
    return (...args) => {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), wait);
    };
  };

  // Check dependencies and log missing ones
  const checkDependencies = () => {
    try {
      Object.entries(dependencies).forEach(([key, value]) => {
        if (!value) {
          console.warn(`Dependency ${key} is not loaded. Some functionality may not work.`);
        }
      });
    } catch (error) {
      console.error('Error checking dependencies:', error);
    }
  };

  // Initialize GSAP plugins
  const initGsap = () => {
    try {
      if (dependencies.gsap && dependencies.ScrollTrigger && dependencies.SplitText) {
        gsap.registerPlugin(ScrollTrigger, SplitText);
        gsap.config({
          nullTargetWarn: false,
          trialWarn: false
        });
      }
    } catch (error) {
      console.error('Error initializing GSAP:', error);
    }
  };

  // Preloader
  $window.on('load', () => {
    try {
      if ($preloader.length) {
        $preloader.delay(300).fadeOut(400);
      }
    } catch (error) {
      console.error('Error in preloader:', error);
    }
  });

  // AOS Animation
  const initAOS = () => {
    try {
      if ($('[data-aos]').length && dependencies.AOS) {
        AOS.init({
          duration: 1200,
          disable: false,
          easing: 'ease',
          mirror: true
        });
      }
    } catch (error) {
      console.error('Error initializing AOS:', error);
    }
  };

  // Swiper Slider
  const thmSwiperInit = () => {
    try {
      // swiper slider
      if ($(".thm-swiper__slider").length) {
        $(".thm-swiper__slider").each(function () {
          let elm = $(this);
          let options = elm.data('swiper-options');
          let thmSwiperSlider = new Swiper(elm, options);
        });
      }
    } catch (error) {
      console.error('Error initializing Swiper:', error);
    }
  };

  // Full Height
  const fullHeight = () => {
    try {
      if ($fullHeight.length) {
        $fullHeight.css("height", $window.height());
      }
    } catch (error) {
      console.error('Error in fullHeight:', error);
    }
  };

  // Owl Carousel configurations
  const owlCarouselConfig = (selector, options) => {
    try {
      if (selector.length && dependencies.owlCarousel) {
        selector.owlCarousel(options);
      }
    } catch (error) {
      console.error(`Error initializing Owl Carousel for ${selector.selector}:`, error);
    }
  };

  // Initialize all carousels
  const initCarousels = () => {
    owlCarouselConfig($testimonialOneCarousel, {
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 1 },
        992: { items: 1 },
        1200: { items: 1 },
        1320: { items: 1 }
      }
    });

    owlCarouselConfig($brandOneCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-left-arrow"></span>', '<span class="icon-next"></span>'],
      responsive: {
        0: { items: 1 },
        540: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
        1320: { items: 5 }
      }
    });

    owlCarouselConfig($brandTwoCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-left-arrow"></span>', '<span class="icon-next"></span>'],
      responsive: {
        0: { items: 1 },
        540: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
        1320: { items: 5 }
      }
    });

    owlCarouselConfig($blogOneCarousel, {
      loop: true,
      margin: 40,
      nav: true,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 2 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($teamOneCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
        1320: { items: 4 }
      }
    });

    owlCarouselConfig($testimonialTwoCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($portfolioOneCarousel, {
      loop: true,
      margin: 21,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 4 }
      }
    });

    owlCarouselConfig($portfolioTwoCarousel, {
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 1 },
        992: { items: 1 },
        1200: { items: 1 },
        1320: { items: 1 }
      }
    });

    owlCarouselConfig($servicesThreeCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($teamTwoCarousel, {
      loop: true,
      margin: 30,
      nav: true,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-up"></span>', '<span class="icon-right-up"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 2.2 },
        1320: { items: 2.461 }
      }
    });

    owlCarouselConfig($blogCarouselStyle, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-arrow-1"></span>', '<span class="icon-right-arrow-1"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($teamCarouselStyle, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-arrow-1"></span>', '<span class="icon-right-arrow-1"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
        1320: { items: 4 }
      }
    });

    owlCarouselConfig($servicesCarouselStyle, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-arrow-1"></span>', '<span class="icon-right-arrow-1"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($testimonialsCarouselStyle, {
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 7000,
      navText: ['<span class="icon-right-arrow-1"></span>', '<span class="icon-right-arrow-1"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 3 }
      }
    });

    owlCarouselConfig($relatedProductsCarousel, {
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      smartSpeed: 500,
      autoplay: true,
      autoplayTimeout: 2000,
      navText: ['<span class="icon-left-arrow"></span>', '<span class="icon-right-arrow"></span>'],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 },
        1320: { items: 4 }
      }
    });
  };

  // Contact Form Validation
  const initContactForms = () => {
    try {
      if ($contactFormValidated.length && dependencies.validate) {
        $contactFormValidated.each(function () {
          const $form = $(this);
          $form.validate({
            rules: {
              email: {
                required: true,
                email: true
              }
            },
            submitHandler: (form) => {
              try {
                $form.find(".result").html("Sending...");
                $.post(
                  $form.attr("action"),
                  $form.serialize()
                ).done((response) => {
                  $form.find(".result").html(response);
                  $form.find('input[type="text"], input[type="email"], textarea').val("");
                }).fail(() => {
                  $form.find(".result").html("Something went wrong. Please try again.");
                });
              } catch (error) {
                console.error('Error in form submission:', error);
                $form.find(".result").html("An error occurred. Please try again.");
              }
              return false;
            }
          });
          $form.on("submit", (e) => e.preventDefault());
        });
      }
    } catch (error) {
      console.error('Error initializing contact forms:', error);
    }
  };

  // Hover Image
  const initHoverImages = () => {
    try {
      const link = document.querySelectorAll(".hover-item");
      const linkHoverReveal = document.querySelectorAll(".hover-item__box");
      const linkImages = document.querySelectorAll(".hover-item__box-img");
      for (let i = 0; i < link.length; i++) {
        link[i].addEventListener("mousemove", (e) => {
          linkHoverReveal[i].style.opacity = 1;
          linkHoverReveal[i].style.transform = `translate(-100%, -50%) rotate(0deg)`;
          linkImages[i].style.transform = "scale(1, 1)";
          linkHoverReveal[i].style.left = `${e.clientX}px`;
        });
        link[i].addEventListener("mouseleave", () => {
          linkHoverReveal[i].style.opacity = 0;
          linkHoverReveal[i].style.transform = `translate(-50%, -50%) rotate(0deg)`;
          linkImages[i].style.transform = "scale(0.8, 0.8)";
        });
      }
    } catch (error) {
      console.error('Error in hover images:', error);
    }
  };

  // Marquee
  const initMarquee = () => {
    try {
      if ($marqueeMode.length && dependencies.marquee) {
        $marqueeMode.marquee({
          speed: 30,
          gap: 0,
          delayBeforeStart: 0,
          direction: 'left',
          duplicated: true,
          pauseOnHover: true,
          startVisible: true
        });
      }
      if ($marqueeMode2.length && dependencies.marquee) {
        $marqueeMode2.marquee({
          speed: 30,
          gap: 0,
          delayBeforeStart: 0,
          direction: 'left',
          duplicated: true,
          pauseOnHover: true,
          startVisible: true
        });
      }
    } catch (error) {
      console.error('Error initializing marquee:', error);
    }
  };

  // Custom Cursor
  const initCustomCursor = () => {
    try {
      if ($('.custom-cursor').length) {
        const cursor = document.querySelector('.custom-cursor__cursor');
        const cursorInner = document.querySelector('.custom-cursor__cursor-two');
        const links = document.querySelectorAll('a');

        const moveCursor = (e) => {
          const x = e.clientX;
          const y = e.clientY;
          cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
          cursorInner.style.left = `${x}px`;
          cursorInner.style.top = `${y}px`;
        };

        document.addEventListener('mousemove', moveCursor);
        document.addEventListener('mousedown', () => {
          cursor.classList.add('click');
          cursorInner.classList.add('custom-cursor__innerhover');
        });
        document.addEventListener('mouseup', () => {
          cursor.classList.remove('click');
          cursorInner.classList.remove('custom-cursor__innerhover');
        });
        links.forEach(item => {
          item.addEventListener('mouseover', () => cursor.classList.add('custom-cursor__hover'));
          item.addEventListener('mouseleave', () => cursor.classList.remove('custom-cursor__hover'));
        });
      }
    } catch (error) {
      console.error('Error in custom cursor:', error);
    }
  };

  // Portfolio Two Box
  const initPortfolioTwoBox = () => {
    try {
      if ($portfolioTwoBoxLi.length) {
        $portfolioTwoBoxLi.each(function () {
          const $this = $(this);
          $this.on("mouseenter", function () {
            $portfolioTwoBoxLi.removeClass("active");
            $this.addClass("active");
          });
        });
      }
    } catch (error) {
      console.error('Error in portfolio two box:', error);
    }
  };

  // Progress Count Bar
  const initCountBar = () => {
    try {
      if ($countBar.length && dependencies.appear) {
        $countBar.appear(function () {
          const $el = $(this);
          const percent = $el.data("percent");
          $el.css("width", percent).addClass("counted");
        }, { accY: -50 });
      }
    } catch (error) {
      console.error('Error in count bar:', error);
    }
  };

  // Fact Counter
  const initFactCounter = () => {
    try {
      if ($countBox.length && dependencies.appear) {
        $countBox.appear(function () {
          const $t = $(this);
          const n = $t.find(".count-text").attr("data-stop");
          const r = parseInt($t.find(".count-text").attr("data-speed"), 10);
          if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({ countNum: $t.find(".count-text").text() }).animate(
              { countNum: n },
              {
                duration: r,
                easing: "linear",
                step: function () {
                  $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function () {
                  $t.find(".count-text").text(this.countNum);
                }
              }
            );
          }
        }, { accY: 0 });
      }
    } catch (error) {
      console.error('Error in fact counter:', error);
    }
  };

  // Accordion
  const initAccordion = () => {
    try {
      if ($accrodionGrp.length) {
        $accrodionGrp.each(function () {
          const $this = $(this);
          const accrodionName = $this.data("grp-name");
          const $accordion = $this.find(".accrodion");
          $this.addClass(accrodionName);
          $this.find(".accrodion .accrodion-content").hide();
          $this.find(".accrodion.active").find(".accrodion-content").show();
          $accordion.each(function () {
            $(this).find(".accrodion-title").on("click", function () {
              if (!$(this).parent().hasClass("active")) {
                $this.find(".accrodion").removeClass("active");
                $this.find(".accrodion-content").slideUp();
                $(this).parent().addClass("active");
                $(this).parent().find(".accrodion-content").slideDown();
              }
            });
          });
        });
      }
    } catch (error) {
      console.error('Error in accordion:', error);
    }
  };

  // Mailchimp Form
  const initMailchimp = () => {
    try {
      if ($mcForm.length && dependencies.ajaxChimp) {
        $mcForm.each(function () {
          const $this = $(this);
          const mcURL = $this.data("url");
          const $mcResp = $this.parent().find(".mc-form__response");
          $this.ajaxChimp({
            url: mcURL,
            callback: (resp) => {
              $mcResp.append(`<p class="mc-message">${resp.msg}</p>`);
              if (resp.result === "success") {
                $this.removeClass("errored").addClass("successed");
                $mcResp.removeClass("errored").addClass("successed");
                $this.find("input").val("");
                $mcResp.find("p").fadeOut(10000);
              } else if (resp.result === "error") {
                $this.removeClass("successed").addClass("errored");
                $mcResp.removeClass("successed").addClass("errored");
                $this.find("input").val("");
                $mcResp.find("p").fadeOut(10000);
              }
            }
          });
        });
      }
    } catch (error) {
      console.error('Error in mailchimp form:', error);
    }
  };

  // Magnific Popup
  const initMagnificPopup = () => {
    try {
      if ($videoPopup.length && dependencies.magnificPopup) {
        $videoPopup.magnificPopup({
          type: "iframe",
          mainClass: "mfp-fade",
          removalDelay: 160,
          preloader: true,
          fixedContentPos: false
        });
      }
      if ($imgPopup.length && dependencies.magnificPopup) {
        const groups = {};
        $imgPopup.each(function () {
          const id = parseInt($(this).attr("data-group"), 10);
          groups[id] = groups[id] || [];
          groups[id].push(this);
        });
        Object.values(groups).forEach(group => {
          $(group).magnificPopup({
            type: "image",
            closeOnContentClick: true,
            closeBtnInside: false,
            gallery: { enabled: true }
          });
        });
      }
    } catch (error) {
      console.error('Error in magnific popup:', error);
    }
  };

  // Countdown
  const initCountdown = () => {
    try {
      if ($comingSoonCountdown.length && dependencies.countdown) {
        $comingSoonCountdown.each(function () {
          const $this = $(this);
          const countDate = $this.data('countdown-time');
          $this.countdown(countDate, function (event) {
            $(this).html(
              `<li><div class="box"><span class="days">${event.strftime('%D')}</span><span class="timeRef">days</span></div></li>` +
              `<li><div class="box"><span class="hours">${event.strftime('%H')}</span><span class="timeRef clr-1">hrs</span></div></li>` +
              `<li><div class="box"><span class="minutes">${event.strftime('%M')}</span><span class="timeRef clr-2">mins</span></div></li>` +
              `<li><div class="box"><span class="seconds">${event.strftime('%S')}</span><span class="timeRef clr-3">secs</span></div></li>`
            );
          });
        });
      }
      if ($eventOneCountdown.length && dependencies.countdown) {
        $eventOneCountdown.each(function () {
          const $this = $(this);
          const countDate = $this.data('countdown-time');
          $this.countdown(countDate, function (event) {
            $(this).html(
              `<li><div class="box"><span class="days">${event.strftime('%D')}</span><span class="timeRef">days</span></div></li>` +
              `<li><div class="box"><span class="hours">${event.strftime('%H')}</span><span class="timeRef clr-1">hrs</span></div></li>` +
              `<li><div class="box"><span class="minutes">${event.strftime('%M')}</span><span class="timeRef clr-2">mins</span></div></li>` +
              `<li><div class="box"><span class="seconds">${event.strftime('%S')}</span><span class="timeRef clr-3">secs</span></div></li>`
            );
          });
        });
      }
    } catch (error) {
      console.error('Error in countdown:', error);
    }
  };

  // Menu Functions
  const dynamicCurrentMenuClass = ($selector) => {
    try {
      const fileName = window.location.href.split("/").reverse()[0];
      $selector.find("li").each(function () {
        const $anchor = $(this).find("a");
        if ($anchor.attr("href") === fileName) {
          $(this).addClass("current");
        }
      });
      $selector.children("li").each(function () {
        if ($(this).find(".current").length) {
          $(this).addClass("current");
        }
      });
      if (!fileName) {
        $selector.find("li").eq(0).addClass("current");
      }
    } catch (error) {
      console.error('Error in dynamicCurrentMenuClass:', error);
    }
  };

  const initMenu = () => {
    try {
      if ($mainMenuList.length) {
        dynamicCurrentMenuClass($mainMenuList);
      }
      if ($mainMenuList.length && $mobileNavContainer.length) {
        $mobileNavContainer.html($mainMenuList[0].outerHTML);
      }
      if ($stickyHeaderContent.length) {
        $stickyHeaderContent.html($('.main-menu')[0].innerHTML);
      }
      if ($mobileNavContainer.find('.main-menu__list').length) {
        $mobileNavContainer.find('.main-menu__list .dropdown > a').each(function () {
          const $this = $(this);
          const toggleBtn = $('<button>', {
            'aria-label': 'dropdown toggler',
            html: '<i class="fa fa-angle-down"></i>'
          });
          $this.append(toggleBtn);
          $this.find('button').on('click', function (e) {
            e.preventDefault();
            const $self = $(this);
            $self.toggleClass('expanded');
            $self.parent().toggleClass('expanded');
            $self.parent().parent().children('ul').slideToggle();
          });
        });
      }
      if ($mobileNavToggler.length) {
        $mobileNavToggler.on('click', (e) => {
          e.preventDefault();
          $('.mobile-nav__wrapper').toggleClass('expanded');
          $body.toggleClass('locked');
        });
      }
    } catch (error) {
      console.error('Error in menu initialization:', error);
    }
  };

  // Header Search
  const initHeaderSearch = () => {
    try {
      if ($searcherTogglerBox.length) {
        $searcherTogglerBox.on('click', () => $body.addClass('search-active'));
        $closeSearch.on('click', () => $body.removeClass('search-active'));
        $searchPopupColorLayer.on('click', () => $body.removeClass('search-active'));
      }
    } catch (error) {
      console.error('Error in header search:', error);
    }
  };

  // Odometer
  const initOdometer = () => {
    try {
      if ($odometer.length && dependencies.appear) {
        $odometer.each(function () {
          $(this).appear(function () {
            $(this).html($(this).attr("data-count"));
          });
        });
      }
    } catch (error) {
      console.error('Error in odometer:', error);
    }
  };

  // WOW Animations
  const initWow = () => {
    try {
      if ($wow.length && dependencies.WOW) {
        new WOW({
          boxClass: 'wow',
          animateClass: 'animated',
          mobile: true,
          live: true
        }).init();
      }
    } catch (error) {
      console.error('Error in WOW animations:', error);
    }
  };

  // Tabs
  const initTabs = () => {
    try {
      if ($tabsBox.length) {
        $tabsBox.find('.tab-buttons .tab-btn').on('click', function (e) {
          e.preventDefault();
          const $target = $($(this).attr('data-tab'));
          if (!$target.is(':visible')) {
            $target.parents('.tabs-box').find('.tab-buttons .tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $target.parents('.tabs-box').find('.tabs-content .tab').fadeOut(0).removeClass('active-tab');
            $target.fadeIn(300).addClass('active-tab');
          }
        });
      }
    } catch (error) {
      console.error('Error in tabs:', error);
    }
  };

  // Portfolio Layout
  const projectMasonaryLayout = () => {
    try {
      if ($masonaryLayout.length && dependencies.isotope) {
        $masonaryLayout.isotope({ layoutMode: 'masonry' });
      }
      if ($postFilter.length) {
        $postFilter.find('li .filter-text').on('click', function () {
          const $this = $(this);
          const selector = $this.parent().attr('data-filter');
          $postFilter.find('li').removeClass('active');
          $this.parent().addClass('active');
          $filterLayout.isotope({
            filter: selector,
            animationOptions: {
              duration: 500,
              easing: 'linear',
              queue: false
            }
          });
        });
      }
      if ($postFilterDynamic.length) {
        $postFilterDynamic.find('li').each(function () {
          const filterElement = $(this).data('filter');
          const count = $filterLayout.find(filterElement).length;
          $(this).children('.filter-text').append(`<span class="count">${count}</span>`);
        });
      }
    } catch (error) {
      console.error('Error in project masonry layout:', error);
    }
  };

  // Smooth Scroll
  const SmoothMenuScroll = () => {
    try {
      const $anchor = $('.scrollToLink');
      if ($anchor.length) {
        $anchor.children('a').on('click', function (event) {
          event.preventDefault();
          const headerH = $(window).scrollTop() > 10 ? 90 : 90;
          const $target = $(this);
          $('html, body').stop().animate({
            scrollTop: $($target.attr('href')).offset().top - headerH
          }, 200, 'easeInOutExpo');
          $anchor.removeClass('current current-menu-ancestor current_page_item current-menu-parent');
          $target.parent().addClass('current');
        });
      }
    } catch (error) {
      console.error('Error in smooth menu scroll:', error);
    }
  };

  // One Page Menu Scroll
  const OnePageMenuScroll = () => {
    try {
      const windscroll = $(window).scrollTop();
      if (windscroll >= 117) {
        const menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
        menuAnchor.each(function () {
          const sections = $(this).attr("href");
          $(sections).each(function () {
            if ($(this).offset().top <= windscroll + 100) {
              var Sectionid = $(sections).attr("id");
              $(".one-page-scroll-menu").find("li").removeClass("current");
              $(".one-page-scroll-menu").find("li").removeClass("current-menu-ancestor");
              $(".one-page-scroll-menu").find("li").removeClass("current_page_item");
              $(".one-page-scroll-menu").find("li").removeClass("current-menu-parent");
              $(".one-page-scroll-menu")
                .find("a[href*=\\#" + Sectionid + "]")
                .parent()
                .addClass("current");
            }
          });
        });
      } else {
        $(".one-page-scroll-menu li.current").removeClass("current");
        $(".one-page-scroll-menu li:first").addClass("current");
      }
    } catch (error) {
      console.error('Error in one page menu scroll:', error);
    }
  };

  // Scrollbar Handler
  const handleScrollbar = () => {
    try {
      const bodyHeight = $body.height();
      const scrollPos = $window.innerHeight() + $window.scrollTop();
      let percentage = (scrollPos / bodyHeight) * 100;
      if (percentage > 100) percentage = 100;
      $('.scroll-to-top__inner').css('width', `${percentage}%`);
    } catch (error) {
      console.error('Error in scrollbar handler:', error);
    }
  };

  // Animation gsap 
  function title_animation() {
    var tg_var = jQuery('.sec-title-animation');
    if (!tg_var.length) {
      return;
    }
    const quotes = document.querySelectorAll(".sec-title-animation .title-animation");

    quotes.forEach(quote => {

      //Reset if needed
      if (quote.animation) {
        quote.animation.progress(1).kill();
        quote.split.revert();
      }

      var getclass = quote.closest('.sec-title-animation').className;
      var animation = getclass.split('animation-');
      if (animation[1] == "style4") return

      quote.split = new SplitText(quote, {
        type: "lines,words,chars",
        linesClass: "split-line"
      });
      gsap.set(quote, {
        perspective: 400
      });

      if (animation[1] == "style1") {
        gsap.set(quote.split.chars, {
          opacity: 0,
          y: "90%",
          rotateX: "-40deg"
        });
      }
      if (animation[1] == "style2") {
        gsap.set(quote.split.chars, {
          opacity: 0,
          x: "50"
        });
      }
      if (animation[1] == "style3") {
        gsap.set(quote.split.chars, {
          opacity: 0,
        });
      }
      quote.animation = gsap.to(quote.split.chars, {
        scrollTrigger: {
          trigger: quote,
          start: "top 90%",
        },
        x: "0",
        y: "0",
        rotateX: "0",
        opacity: 1,
        duration: 1,
        ease: Back.easeOut,
        stagger: .02
      });
    });
  }
  ScrollTrigger.addEventListener("refresh", title_animation);

  // Price Filter
  const priceFilter = () => {
    try {
      if ($priceRanger.length && $.fn.slider) {
        $priceRanger.find('#slider-range').slider({
          range: true,
          min: 0,
          max: 5000,
          values: [0, 3000],
          slide: (event, ui) => {
            $priceRanger.find('.ranger-min-max-block .min').val(ui.values[0]);
            $priceRanger.find('.ranger-min-max-block .max').val(ui.values[1]);
          }
        });
        $priceRanger.find('.ranger-min-max-block .min').val($priceRanger.find('#slider-range').slider('values', 0));
        $priceRanger.find('.ranger-min-max-block .max').val($priceRanger.find('#slider-range').slider('values', 1));
      }
    } catch (error) {
      console.error('Error in price filter:', error);
    }
  };

  // Quantity Controls
  const initQuantityControls = () => {
    try {
      $add.on('click', function () {
        const $input = $(this).prev();
        if ($input.val() < 999) {
          $input.val(+$input.val() + 1);
        }
      });
      $sub.on('click', function () {
        const $input = $(this).next();
        if ($input.val() > 1) {
          $input.val(+$input.val() - 1);
        }
      });
    } catch (error) {
      console.error('Error in quantity controls:', error);
    }
  };

  // Checkout Payment
  const initCheckoutPayment = () => {
    try {
      if ($checkoutPaymentTitle.length) {
        $('.checkout__payment__item').find('.checkout__payment__content').hide();
        $('.checkout__payment__item--active').find('.checkout__payment__content').show();
        $checkoutPaymentTitle.on('click', function (e) {
          e.preventDefault();
          const $parent = $(this).parent();
          $(this).parents('.checkout__payment').find('.checkout__payment__item').removeClass('checkout__payment__item--active');
          $(this).parents('.checkout__payment').find('.checkout__payment__content').slideUp();
          $parent.addClass('checkout__payment__item--active');
          $parent.find('.checkout__payment__content').slideDown();
        });
      }
    } catch (error) {
      console.error('Error in checkout payment:', error);
    }
  };

  // Product Tabs
  const initProductTabs = () => {
    try {
      if ($productAllTab.length) {
        $productAllTab.find('.tabs-button-box .tab-btn-item').on('click', function (e) {
          e.preventDefault();
          const $target = $($(this).attr('data-tab'));
          if (!$target.hasClass('actve-tab')) {
            $productAllTab.find('.tabs-button-box .tab-btn-item').removeClass('active-btn-item');
            $(this).addClass('active-btn-item');
            $productAllTab.find('.tabs-content-box .tab-content-box-item').removeClass('tab-content-box-item-active');
            $target.addClass('tab-content-box-item-active');
          }
        });
      }
    } catch (error) {
      console.error('Error in product tabs:', error);
    }
  };

  // Shop Details Carousel
  const initShopDetailsCarousel = () => {
    try {
      if ($('#shop-details-one__thumb').length && dependencies.Swiper) {
        const testimonialsThumb = new Swiper('#shop-details-one__thumb', {
          slidesPerView: 3,
          spaceBetween: 0,
          speed: 1400,
          watchSlidesVisibility: true,
          watchSlidesProgress: true,
          loop: true,
          autoplay: { delay: 5000 }
        });
        new Swiper('#shop-details-one__carousel', {
          observer: true,
          observeParents: true,
          loop: true,
          speed: 1400,
          mousewheel: false,
          slidesPerView: 1,
          autoplay: { delay: 5000 },
          thumbs: { swiper: testimonialsThumb },
          pagination: {
            el: '#testimonials-one__carousel-pagination',
            type: 'bullets',
            clickable: true
          },
          navigation: {
            nextEl: '#product-details__swiper-button-next',
            prevEl: '#product-details__swiper-button-prev'
          }
        });
      }
    } catch (error) {
      console.error('Error in shop details carousel:', error);
    }
  };

  // Audio Player
  const initAudioPlayer = () => {
    try {
      const player = document.querySelector('audio');
      if (!player) return;
      const $playButton = $('.play');
      const $pauseButton = $('.pause');
      const $bar = $('.bar');
      let updateTime;

      const pad = (num, size) => {
        let s = `${num}`;
        while (s.length < size) s = `0${s}`;
        return s;
      };

      const startNupdate = () => {
        player.pause();
        player.play();
        $playButton.hide();
        $pauseButton.show();
        clearInterval(updateTime);
        updateTime = setInterval(() => {
          let gradients = '';
          for (let i = 0; i < player.buffered.length; i++) {
            const percStart = (player.buffered.start(i) / player.duration) * 100;
            const percEnd = (player.buffered.end(i) / player.duration) * 100;
            gradients += i > 0
              ? `,rgba(240,240,240) ${percStart}%,#9D9D9D ${percStart}%,#9D9D9D ${percEnd}%,rgba(240,240,240) ${percEnd}%`
              : `#9D9D9D ${percStart}%,#9D9D9D ${percEnd}%,rgba(240,240,240) ${percEnd}%`;
          }
          gradients += `,rgba(240,240,240) ${(player.buffered.end(player.buffered.length - 1) / player.duration) * 100}%,rgba(240,240,240)`;
          $bar.css({ background: `linear-gradient(to right, #F0F0F0, ${gradients})` });
          const minutes = pad(Math.floor(player.currentTime / 60), 2);
          const seconds = pad(Math.floor(player.currentTime - minutes * 60), 2);
          $('.elapsed span').html(`${minutes}:${seconds}`);
          $('.position-marker').css({ left: `${(player.currentTime / player.duration) * 100}%` });
        }, 1000);
      };

      $bar.on('click', (event) => {
        const posPerc = event.offsetX / event.target.offsetWidth;
        player.currentTime = player.duration * posPerc;
        startNupdate();
      });
      $playButton.on('click', startNupdate);
      $pauseButton.on('click', () => {
        player.pause();
        $pauseButton.hide();
        $playButton.show();
        clearInterval(updateTime);
      });
    } catch (error) {
      console.error('Error in audio player:', error);
    }
  };

  // Nice Select
  const initNiceSelect = () => {
    try {
      if (dependencies.niceSelect) {
        $('select:not(.ignore)').niceSelect();
      }
    } catch (error) {
      console.error('Error in nice select:', error);
    }
  };

  // Curved Circle
  const initCurvedCircle = () => {
    try {
      if ($portfolioOneCurvedCircle.length && dependencies.circleType) {
        $portfolioOneCurvedCircle.circleType({
          position: 'absolute',
          dir: 1,
          radius: 79.5,
          forceHeight: true,
          forceWidth: true
        });
      }
      if ($servicesTwoCurvedCircle.length && dependencies.circleType) {
        $servicesTwoCurvedCircle.circleType({
          position: 'absolute',
          dir: 1,
          radius: 73.6,
          forceHeight: true,
          forceWidth: true
        });
      }
    } catch (error) {
      console.error('Error in curved circle:', error);
    }
  };

  // Window Load Handler
  $window.on('load', () => {
    try {
      checkDependencies();
      initGsap();
      initAOS();
      initCarousels();
      initContactForms();
      initHoverImages();
      initMarquee();
      initCustomCursor();
      initPortfolioTwoBox();
      initCountBar();
      initFactCounter();
      initAccordion();
      initMailchimp();
      initMagnificPopup();
      initCountdown();
      initMenu();
      initHeaderSearch();
      initOdometer();
      initWow();
      initTabs();
      initShopDetailsCarousel();
      initQuantityControls();
      initCheckoutPayment();
      initProductTabs();
      initNiceSelect();
      initCurvedCircle();
      SmoothMenuScroll();
    } catch (error) {
      console.error('Error in window load handler:', error);
    }
  });

  //new window load event | not use cache $window  cause time issu
  $(window).on("load", function () {
    title_animation();
    projectMasonaryLayout();
    fullHeight();
    priceFilter();
    thmSwiperInit();
  });

  // Debounced Scroll Handler
  const debouncedScrollHandler = debounce(() => {
    try {
      if ($strickedMenu.length) {
        const headerScrollPos = 300;
        if ($window.scrollTop() > headerScrollPos) {
          $strickedMenu.addClass('stricky-fixed');
        } else {
          $strickedMenu.removeClass('stricky-fixed');
        }
      }
      if ($stickyHeaderOnePage.length) {
        const headerScrollPos = 130;
        if ($window.scrollTop() > headerScrollPos) {
          $stickyHeaderOnePage.addClass('active');
        } else {
          $stickyHeaderOnePage.removeClass('active');
        }
      }
      if ($scrollToTop.length) {
        if ($window.scrollTop() > 500) {
          $scrollToTop.addClass('show');
        } else {
          $scrollToTop.removeClass('show');
        }
      }
      OnePageMenuScroll();
      handleScrollbar();
    } catch (error) {
      console.error('Error in scroll handler:', error);
    }
  }, 100);

  $window.on('scroll', debouncedScrollHandler);

  // Document Ready
  $document.ready(() => {
    initAudioPlayer();
  });
})(jQuery);