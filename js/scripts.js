// @codekit-prepend "libs/modernizr.js"
// @codekit-prepend "libs/jquery.bxslider.min.js"
// @codekit-prepend "libs/jquery.fittext.js"
// @codekit-prepend "libs/fastclick.js"

// DOM Ready
(function($, window, undefined) {
  $(function() {

    FastClick.attach(document.body);

    // Mobile Menu toggle
    jQuery(document).ready(function($){
      /* prepend menu icon */
      $('#mobile-menu-wrap').prepend('<div id="menu-icon">CATEGORIES <span class="icon"></span></div>');
      /* toggle nav */
      $("#menu-icon").on("click", function(){
        $("#mobile-menu").slideToggle('fast', 'swing');
        $(this).toggleClass("active");
      });
    });


    // Adds touch screen "hover" support
    // Also needed to add "-webkit-tap-highlight-color: rgba(0,0,0,0);" to the "a" tag in _defaults.scss to get rid of gray overlay
    document.addEventListener("touchstart", function(){}, true);


    // Removes iOS link popups when long tap
    // $("a").bind('taphold', function(event) {
    //   event.preventDefault();
    // });


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


    // FitText.js
    $(".intro-content h1").fitText(1.2, { minFontSize: '34px', maxFontSize: '120px' });


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