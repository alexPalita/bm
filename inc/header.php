<?php
$addRoot = function() use ($section) {
    if($section){
        echo "./";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="fonts/MyFontsWebfontsKit/MyFontsWebfontsKit.css">
    <link rel="stylesheet" href="css/b.css">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <script>
    document.createElement( "picture" );
    </script>
    <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js" async></script>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="81">
    <nav  class="fixed-top  container d-flex  flex-column flex-lg-row justify-content-between" id="navbar">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <a href="./" id="logo">
              <img alt="LogoBM" src="img/bm/LogoBM.svg" class="my-3">
          </a>
          <div id="nav-icon1" class="align-self-center toggle">
              <span></span>
              <span></span>
              <span></span>
          </div>
        </div>
        <ul id="navContainer" class="text-center navLandingPage flex-column flex-lg-row align-self-lg-center"  role="tablist">
            <li class="nav-item  d-lg-flex align-items-lg-center">
                <a class="nav-link" href="<?php $addRoot(); ?>#home">Home</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
                <a class="nav-link" href="<?php $addRoot(); ?>#about">About us</a>
            </li>
            <li class="nav-item d-lg-flex align-items-lg-center">
              <a class="nav-link"  id="<?php if ($section == "pumps") { echo "on";} ?>" href="catalog.php?cat=pumps">Pumps</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
              <a class="nav-link" id="<?php if ($section == "sandals") { echo "on";} ?>" href="catalog.php?cat=sandals">Sandals</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
                <a class="nav-link" href="<?php $addRoot(); ?>#contact">Contact</a>
            </li>
            <li class="nav-item d-lg-flex align-items-lg-center">
              <a class="nav-link" id="<?php if ($section == "place-order") { echo "on";} ?>" href="place-order.php">Order</a>
            </li>
            <li class="nav-item mb-lg-1 d-flex align-items-md-center justify-content-center">
                <ul class="socialBox  py-3  d-flex justify-content-between">
                    <li><a href="https://www.facebook.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="img/bm/facebookLogo.svg" alt="Facebook Logo"></a></li>
                    <li><a href="https://www.pinterest.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="img/bm/pinterestLogo.svg" alt="Pinterest Logo"></a></li>
                    <li><a href="https://www.instagram.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="img/bm/instagramLogo.svg" alt="Instagram Logo"></a></li>
                </ul>
            </li>
        </ul>
    </nav>