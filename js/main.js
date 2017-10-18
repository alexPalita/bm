
$(function() {
    var $href = $('.navLandingPage a[href="#contact"],.navLandingPage a[href="#about"]');
    $href.on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 600, function(){
          window.location.hash = hash;
        });
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
