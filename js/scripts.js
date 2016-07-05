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


    // Homepage Song Fade
    if( $('body').hasClass('home') ) {
      var maxVol = 40;
      var minVol = 15;
      var elHeight = $('.hero').height();
      var audioElm = $('#scrollaudio').get(0);

      audioElm.play();
      audioElm.volume = maxVol/100;

      $(window).scroll(function() {
        var positionPercent = Math.max(0, (100 - (($(window).scrollTop() / elHeight) * 100)));
        var newVol = (((((maxVol - minVol) / 100) * positionPercent) + minVol) / 100);
        audioElm.volume = newVol;
      });

      $('.audio-toggle').click(function() {
        if (audioElm.paused === false) {
          audioElm.pause();
          $(this).addClass('playBtn');
          $(this).removeClass('pauseBtn');
        } else {
          audioElm.play();
          $(this).addClass('pauseBtn');
          $(this).removeClass('playBtn');
        }
      });
    }


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
    $('body').on('click', '.video-play-btn', function(){
      $('#fancyWrap, .fancy-positioner').addClass('isOpen');
    });

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


    // menu modal
    $('body').on('click', '.fancybox-menu-box', function(){
      $('#fancyWrap, .fancy-positioner').addClass('isOpen');
    });

    var thisMenuBox;

    var nextMenuBox;
    var nextMenuBoxTitle;
    var nextMenuBoxImage;

    var prevMenuBox;
    var prevMenuBoxTitle;
    var prevMenuBoxImage;

    $('.menu-category-wrap').each(function(){
      thisMenuBox = $(this);

      nextMenuBox = thisMenuBox.next();
      nextMenuBoxTitle = nextMenuBox.find('.menu-items-box').find('h3').text();
      nextMenuBoxImage = nextMenuBox.find('.menu-category').css('background-image');

      prevMenuBox = thisMenuBox.prev();
      prevMenuBoxTitle = prevMenuBox.find('.menu-items-box').find('h3').text();
      prevMenuBoxImage = prevMenuBox.find('.menu-category').css('background-image');

      thisMenuBox.find('.next-prev-menu-category-links .next a').text(nextMenuBoxTitle);
      thisMenuBox.find('.next-prev-menu-category-links .prev a').text(prevMenuBoxTitle);

      thisMenuBox.find('.next-prev-menu-category-links .next').css('background-image', nextMenuBoxImage);
      thisMenuBox.find('.next-prev-menu-category-links .prev').css('background-image', prevMenuBoxImage);

      if ( $(this).is(':first-child') ) {
        thisMenuBox.find('.next-prev-menu-category-links .prev').remove();
      } else if ( $(this).is(':last-child') ) {
        thisMenuBox.find('.next-prev-menu-category-links .next').remove();
      }
    });


    $(".fancybox-menu-box").fancybox({
      minWidth: '100%',
      scrolling: 'visible',
      type: 'inline',
      nextEffect: 'fade',
      prevEffect: 'fade',
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
      // tpl: {
      //   next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;">'+nextMenuBoxTitle+'</a>'
      // }
    });



    // Locations page(s)
    if ( $('body').hasClass('locations') || $('body').hasClass('tax-city') ) {
      // Add button class to nearest location "get directions" button
      $('.nearest-location-wrapper .info').find('a').addClass('btn btn--ghost');

      // add wrapper around city filter select box
      $('#ofcity').wrap('<div class="select-style"><div class="inner"></div></div>');

      // remove default submit button, and make it so it triggers automatically when user changes selection
      $(".city-filter input[type='submit']").each(function() {
        $(this).remove();
      });

      // change default "search" function on "All Cities" choice - don't search, just go to "Locations" page
      $('.city-filter').find('select').change(function(){
        if (this.value === "0") {
          window.location = "/locations/"; // redirect
          return false;

        } else {
          $(this).closest('form').trigger('submit');
        }
      });

      if ( $('body').hasClass('tax-city') ) {
        $('.main-menu').find('.isLocations').addClass('current-menu-item');
      }
    }


    // Single Location Page stuff
    if ( $('body').hasClass('single-location') ) {
      // start page scroll at top, then animate down using animateScroll below
      $('html,body').animate({
        scrollTop: 0
      }, 1);

      $('.main-menu').find('.isLocations').addClass('current-menu-item');

      // remove (hide) extra stuff in this box
      $('.location-intro .gmw-single-post-sc-wrapper').find('.map-wrapper, .distance-wrapper, .gmw-single-post-sc-additional-info').remove();

      $(".gmw-single-post-sc-form").prepend("<h4>Get Directions:</h4>");

      // Add button class to "get directions" GO button - and remove "input submit"
      $(".gmw-single-post-sc-form input[type='submit']").each(function() {
        $(this).remove();
      });
      $('<button type="submit" class="btn btn--ghost">Go</button>').appendTo(".gmw-single-post-sc-form form");
    }


    // Smooth scrolling for anchors on same page - via: https://css-tricks.com/snippets/jquery/smooth-scrolling/
    // don't include this script on "menu" page - it was breaking the menu popup
    if ( ! $('body').hasClass('menu') ) {
      setTimeout(function() {
        $(function() {
          $('a[href*=#]:not([href=#], .modalTrigger)').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 600);
                return false;
              }
            }
          });
        });
      }, 260);

      var animateScroll = function () {
        var urlHash = window.location.href.split("#")[1];
        $('html,body').scrollTop('0');
        if (urlHash &&  $('#' + urlHash).length ) {
          $('html,body').animate({
            scrollTop: $('#' + urlHash).offset().top
          }, 600);
        }
      };

      $(window).on("load", animateScroll);
    }



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