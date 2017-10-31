
$(function() {
    var $href = $('#navContainer a[href="#home"],#navContainer a[href="#contact"],#navContainer a[href="#about"]');
    // $href.on('click', function(event) {
    //   if (this.hash !== "") {
    //     event.preventDefault();
    //     var hash = this.hash;
    //     $('html, body').animate({
    //       scrollTop: $(hash).offset().top
    //     }, 600, function(){
    //       window.location.hash = hash;
    //     });
    //   }
    // });


    // Select all links with hashes
// $('a[href*="#"]')
  // Remove links that don't actually link to anything
  // .not('[href="#"]')
  // .not('[href="#0"]')
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
      if (!$firstTabPane.hasClass('active')) {
          $firstTabPane.addClass('active');
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

});
