// @codekit-prepend "libs/modernizr.js"
// @codekit-prepend "libs/jquery.bxslider.min.js"
// @codekit-prepend "libs/fastclick.js"

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


    // bxSlider(s)
    $('.CLASSofSLIDER').bxSlider({
      adaptiveHeight: true,
      nextSelector: '.slide-next',
      prevSelector: '.slide-prev',
      nextText: '',
      prevText: ''
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