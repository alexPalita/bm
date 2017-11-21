$(function() {
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1000,
        outDuration: 800,
        linkElement: '.animsition-link',
        // // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
        loading: true,
        loadingParentElement: 'main', //animsition wrapper element
        loadingClass: 'animsition-loading',
        // loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: true,
        timeoutCountdown: 600,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        // // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        // overlay : false,
        // overlayClass : 'animsition-overlay-slide',
        // overlayParentElement : 'body',
        // transition: function(url){ window.location.href = url; }

    });


    var $href = $('#navContainer a[href="#home"],#navContainer a[href="#contact"],#navContainer a[href="#about"]');
    $href.click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 80
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
    });


    var $firstTabPane = $('.tab-content div:first-child');
    if (!$firstTabPane.hasClass('active show')) {
        $firstTabPane.addClass('active show');
    }

    var $carouselItem = $('#carouselTabPanes .carousel-item');
    var $carouselfirstTabPane = $('#carouselTabPanes .carousel-item:first-child');
    var $carouselNavLinkfirst = $('#carouselTabPanes .nav-item:first-child >nav-link');
    var $carouselNavLink = $('#carouselTabPanes .nav-item > .nav-link');

    if (!$carouselItem.hasClass('active')) {
        $carouselfirstTabPane.addClass('active');
        $carouselNavLinkfirst.addClass('active');
    }


    $carouselNavLink.click(function(){
        var $thisItem = $(this).closest('ul');

        if (!$('#carouselTabPanes ul').hasClass('active')) {
            $thisItem.toggleClass('active');
            console.log('true');
        } else {
            console.log('wrong');
        }
    });
    // $('#carouselTabPanes .active').click(function(ev) {
    //         ev.preventDefault();
    //         if (!$carouselItem.hasClass('active') && ) {
    //             this.;
    //          }
    // });

    // var $activeNavLink = $('#carouselTabPanes > ul nav-link');


    // if (!activeTabPane.hasClass('active') && $activeTabPane.find('nav-link').hasClass('active')) {
    //     $activeTabPane.find('nav-link').removeClass('active');
    // }


    var $navContainer = $('#navContainer');
    var $contentLandingPage = $('.contentLandingPage');
    var $contentShoesPage = $('.contentShoesPage');
    var $productContainer = $('.productContainer');
    var $headerBox = $('header');
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $navContainer.addClass('visible');
            $contentLandingPage.addClass('blur');
            $contentShoesPage.addClass('blur');
            $productContainer.addClass('blur');
            $headerBox.addClass('blur');
        } else {
            $navContainer.removeClass('visible');
            $contentLandingPage.removeClass('blur');
            $contentShoesPage.removeClass('blur');
            $productContainer.removeClass('blur');
            $headerBox.removeClass('blur');
        }
    });

    $('.tab-pane .toEnlarge').on('click', function(ev) {
        if (($(window).width() < 769) && (window.matchMedia("(orientation: portrait)").matches)) {
            ev.preventDefault();
        }
        else {
            ev.preventDefault();
            $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
            $('#enlargeImageModal').modal('show');
        }
    });

    if (window.matchMedia("(orientation: portrait)").matches) {
       console.log("you're in PORTRAIT mode");
    }

    if (window.matchMedia("(orientation: landscape)").matches) {
       console.log("you're in LANDSCAPE mode");
    }

});
