$(function () {

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
    // longSwipes: false,
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

        if ( this.realIndex == 4 ) {
          $('.menu').addClass('is-black');
          var typed = new Typed('.typed', {
            strings: ["Контакты", "Расскажите нам о своей цели и оставьте контактные данные", "Делаем сильных сильнее", "Напишите нам", "Оставьте заявку и мы свяжемся с вами"],
            typeSpeed: 50,
            backSpeed: 50,
            smartBackspace: true
          });
        } else if (this.realIndex == 0) {
          $('.menu').removeClass('is-about').addClass('is-head');
        } else if (this.realIndex == 1) {
          $('.menu').removeClass('is-head').addClass('is-about');
        } else {
          $('.menu').removeClass('is-head').removeClass('is-about').removeClass('is-black')
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

  $('.btn--form').click(function(){
    $('.modal--block').addClass('is-active');
    setTimeout(function(){
      $('.modal--block').addClass('is-faded')
    }, 10)
  });

  $('.modal--close').click(function(){
    $('.modal--block').removeClass('is-faded');
    setTimeout(function(){
      $('.modal--block').removeClass('is-active')
    }, 100)
  })

  if ( $(document).width() < 768 ) {
    $('.m-slider').slick({
      arrows: false,
      dots: true
    })
  }


});
