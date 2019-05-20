$(function () {

  (function () {
    if (typeof IexForms === 'undefined') return;

    let formsParams = {
      'popup': { config: '/libs/iexForm/index.php?config=onestep&template=popup' },
      'contacts': { config: '/libs/iexForm/index.php?config=onestep&template=contacts' },
    };

    window.iexForms = new IexForms(formsParams);
  })();

  $('.btn--form').click(function () {
    $('.modal--block').addClass('is-active');
    setTimeout(function () {
      $('.modal--block').addClass('is-faded')
    }, 10)
  });

  $('.modal--close').click(function () {
    $('.modal--block').removeClass('is-faded');
    setTimeout(function () {
      $('.modal--block').removeClass('is-active')
    }, 100)
  })

  if ($(document).width() < 768) {
    $('.m-slider').slick({
      arrows: false,
      dots: true,
      slidesToShow: 2,
      slidesToScroll: 2
    })
  }

  $('.tr-slider').slick({
    arrows: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      }
    ]
  });

  if ($(document).width() < 900) {

    $('body').scroll(function () {
      var scroll = $('body').scrollTop();

      if (scroll >= $(window).height()) {
        $('.menu').removeClass('is-head').addClass('is-black')
      } else {
        $('.menu').removeClass('is-black')
      }
    })

    $('.swiper-slide').removeClass('swiper-slide')
    $('.swiper-container').removeClass('swiper-container')
    $('.swiper-wrapper').removeClass('swiper-wrapper')
  }

  if ($(document).width() > 900) {

    var pageIndex = $('#pageIndex'),
      pageSlides = $('#pageSlides'),
      pageBar = $('#pageBar'),
      animateTimeout,
      animationTime = 1000,
      lastSlide = 0;

    pageSlider = new Swiper('.page', {
      speed: animationTime,
      spaceBetween: 0,
      direction: 'vertical',

      // Controls
      mousewheel: true,
      keyboard: true,
      simulateTouch: false,
      //longSwipes: false,
      followFinger: false,
      threshold: 50,

      //Effect
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },

      //Navigation
      navigation: {
        nextEl: '.js-swiper-button-next',
        prevEl: '.js-swiper-button-prev',
        disabledClass: 'is-disable'
      },
      hashNavigation: {
        watchState: true,
      },

      //Clases
      slideActiveClass: 'is-active',
      slidePrevClass: 'is-prev',
      slideNextClass: 'is-next',

      on: {

        init: function () {
          $(this.slides[this.realIndex]).addClass('is-in');
          this.isInit = false;
        },

        slideChangeTransitionStart: function () {
          var self = this;
          $(this.slides).removeClass('is-in is-out');
          $(this.slides[this.previousIndex]).addClass('is-out');
          $(self.slides[self.realIndex]).addClass('is-hide');

          clearTimeout(animateTimeout);
          animateTimeout = setTimeout(function () {
            $(self.slides[self.realIndex]).removeClass('is-hide').addClass('is-in');
          }, animationTime / 2);

          console.log(this.realIndex)

          if (this.realIndex == 4) {
            $('.menu').removeClass('is-head').addClass('is-black');
          } else {
            $('.menu').removeClass('is-black').addClass('is-head');
          }

          this.isInit = true;
        },


        slideChangeTransitionEnd: function () {
          var self = this;
          $(this.slides[this.previousIndex]).removeClass('is-out');
          setTimeout(function () {
          }, 450);

        },

        touchStart: function (event) {
          this.touchPosLast = event.touches[0].screenY;
          this.touchOffset = 0;
          this.$currentSlide = $(this.slides[this.realIndex]).children();
          this.$currentSlide.css('transition', 'transform .2s ease');
        },

        touchMove: function (event) {
          this.touchOffset = this.touchPosLast - event.touches[0].screenY;
          if (Math.abs(this.touchOffset) > 80) {
            return;
          } else {
            this.$currentSlide.css('transform', 'translate3d(0, ' + (-this.touchOffset * 0.5) + 'px,0 )');
          };

        },

        touchEnd: function () {

          this.$currentSlide.css('transform', 'translate3d(0,0,0)');
        }
      }
    });
  }



});

