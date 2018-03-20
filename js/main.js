

$(function() {
    var version = detectIE();

    if (version === false) {
        console.log('Browser Accepted');
    } else if (version >= 12) {
        console.log('Edge ' + version);
    } else {
        console.log('Edge ' + version);
        $('main').html('<p class="m-5 p-5" style="font-size: 2rem">We detected Internet Explorer ' + version + '. <br>Please use one of the following browsers for better experience : <br>• Internet Explorer 12+ aka Edge,<br>• Chrome,<br>• Safari,<br>• Mozzila Firefox or<br> • Opera.</p>');
    }

    function detectIE() {
        var ua = window.navigator.userAgent;

        // Test values; Uncomment to check result …

        // IE 10
        // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

        // IE 11
        // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

        // Edge 12 (Spartan)
        // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

        // Edge 13
        // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }

        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }

        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            // Edge (IE 12+) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }

        // other browser
        return false;
    }



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


    var $firstTabPane = $('.shoesContainer .tab-content div:first-child');
    if (!$firstTabPane.hasClass('active show')) {
        $firstTabPane.addClass('active show');
    }
    var $firstListGroup = $('.list-group-item-action:first-child');
    if (!$firstListGroup.hasClass('active')) {
        $firstListGroup.addClass('active');
    }



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
