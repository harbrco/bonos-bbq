// @codekit-prepend "libs/modernizr.js"
// @codekit-prepend "libs/jquery.bxslider.min.js"
// @codekit-prepend "libs/fastclick.js"
// @codekit-prepend "libs/jquery.fancybox.pack.js"
// @codekit-prepend "libs/fancybox-helpers/jquery.fancybox-buttons.js"
// @codekit-prepend "libs/fancybox-helpers/jquery.fancybox-media.js"

// DOM Ready
(function($, window, undefined) {
  $(function() {

    FastClick.attach(document.body);

    // Mobile Menu toggle
    $('.mobile-menu-icon').click(function(e){
      e.preventDefault();
      $('body').toggleClass('modalOpen');
      $(this).toggleClass('open');
    });


    // Adds touch screen "hover" support
    // Also needed to add "-webkit-tap-highlight-color: rgba(0,0,0,0);" to the "a" tag in _defaults.scss to get rid of gray overlay
    document.addEventListener("touchstart", function(){}, true);


    // Removes iOS link popups when long tap
    // $("a").bind('taphold', function(event) {
    //   event.preventDefault();
    // });


    // Home Lower CTA Videos
    if( $('body').hasClass('home') ) {
      var hoverVids = function() {
        function hoverVideo() {
          $('video', this).get(0).play();
        }
        function hideVideo() {
          $('video', this).get(0).pause();
        }

        $('.home-lower-cta').hover( hoverVideo, hideVideo );
      };
      hoverVids();
    }


    // Vertical Align Elements
    var vAlignShow = function() {
      $('.vAlign').fadeIn(50).css('visibility', 'visible'); // fixes the css "hidden" style for the flash before complete page load (.vAlign in _common.scss)
    };
    vAlignShow();
    var vAlignFun = function() {
      (function ($) {
      $.fn.vAlign = function() {
        return this.each(function(){
          var div = $(this).children('div.vAlign');
          var ph = $(this).innerHeight();
          var dh = div.height();
          var mh = (ph - dh) / 2;
          div.css('top', mh);
        });
      };
      })(jQuery);
      $('.vAlign').parent().vAlign();
    };
    $(window).load(function() {
      vAlignFun();
    });

    $(window).resize(function() {
      vAlignFun();
    }).resize();

    // Listen for resize changes (mobile orientation change)
    window.addEventListener("resize", function() {
      vAlignFun();
    }, false);



    var homeAboutSliderHeight;

    var homeAboutSliderHeightCalc = function(){
      homeAboutSliderHeight = $('.home-about-intro').height();
      $('.bx-viewport').css("height", homeAboutSliderHeight);
    };
    homeAboutSliderHeightCalc();

    $(window).resize(function() {
      homeAboutSliderHeightCalc();
    }).resize();


    // bxSlider(s)
    $('.home-about-slider').bxSlider({
      mode: 'fade',
      auto: ($(".home-about-slider>.slide").length > 1) ? true: false,
      autoHover: true,
      pause: 5000,
      adaptiveHeight: false,
      controls: false,
      pager: ($(".home-about-slider>.slide").length > 1) ? true: false
    });



    // Fancybox - Modal popup
    // video modal
    $(".fancybox-video").fancybox({
      width: "100%",
      height: "85%",
      type:'iframe',
      openOpacity: true,

      helpers: {
        media :{},
        overlay: {
          locked: false
        }
      },
      beforeLoad: function() {
        $('#fancybox-loading').appendTo('#fancyWrap');
      },
      beforeShow: function() {
        $('.fancybox-wrap, .fancybox-overlay, #fancybox-loading').appendTo('#fancyWrap');
      },
      afterShow: function() {
        $('.fancybox-close').addClass('close-btn').prepend("<i class='close-icon'></i>");
        $('body').addClass('noScroll');
      },
      afterClose: function() {
        $('#fancyWrap, .fancy-positioner').removeClass('isOpen');
        $('body').removeClass('noScroll');
      }
    });

    $('body').on('click', '.video-play-btn', function(){
      $('#fancyWrap, .fancy-positioner').addClass('isOpen');
    });


    // image modal
    $('body').on('click', '.image-modal', function(e){
      e.preventDefault();
      $('#fancyWrap, .fancy-positioner').addClass('isOpen');
    });

    $(".fancybox-image").fancybox({
      helpers: {
        overlay: {
          locked: false
        }
      },
      beforeLoad: function() {
        $('#fancybox-loading').appendTo('#fancyWrap');
      },
      beforeShow: function() {
        $('.fancybox-wrap, .fancybox-overlay, #fancybox-loading').appendTo('#fancyWrap');
      },
      afterShow: function() {
        $('.fancybox-close').addClass('close-btn').prepend("<i class='close-icon'></i>");
        $('body').addClass('noScroll');
      },
      afterClose: function() {
        $('#fancyWrap, .fancy-positioner').removeClass('isOpen');
        $('body').removeClass('noScroll');
      }
    });



    // Force .middle-wrapper to have min-height to fill up space and push footer down (for short-content pages)
    if ( ! $('body').hasClass('touch') ) {
      var middleWrapperHeight;
      $(window).resize(function() {
        //var headerHeight = $('.header-wrapper').height();
        var footerHeight = $('.footer-wrapper').height();
        //middleWrapperHeight = $(window).height() - headerHeight - footerHeight;
        middleWrapperHeight = $(window).height() - footerHeight;
        $('.middle-wrapper').css('min-height', middleWrapperHeight);
      }).resize();
    }


    // Gravity Forms custom select field - give focus effects.
    $('.select-style').find('select').on('focusin', function() {
      $(this).parent().addClass('hasFocus');
    });
    $('.select-style').find('select').on('focusout', function() {
      $(this).parent().removeClass('hasFocus');
    });

    // Gravity Forms default text clear on focus
    $.fn.cleardefault = function() {
      return this.focus(function() {
        if( this.value === this.defaultValue ) {
          this.value = "";
        }
      }).blur(function() {
        if( !this.value.length ) {
          this.value = this.defaultValue;
        }
      });
    };
    $(".clearit input, .clearit textarea").cleardefault();

  });

})(jQuery, window);