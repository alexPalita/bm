<?php
$addRoot = function() use ($section) {
    if($section){
        echo "/";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#fff"/>
    <title><?php echo $pageTitle ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=latin-ext" rel="stylesheet">
    <!--
    /**
     * @license
     * MyFonts Webfont Build ID 3451899, 2017-09-15T11:25:30-0400
     *
     * The fonts listed in this notice are subject to the End User License
     * Agreement(s) entered into by the website owner. All other parties are
     * explicitly restricted from using the Licensed Webfonts(s).
     *
     * You may obtain a valid license at the URLs below.
     *
     * Webfont: Hollyhock-Regular by Angie Makes
     * URL: https://www.myfonts.com/fonts/fonted-house/hollyhock/regular/
     * Copyright: Copyright (c) 2014 by Angie Makes. All rights reserved.
     * Licensed pageviews: 1,010,000
     *
     *
     * License: https://www.myfonts.com/viewlicense?type=web&buildid=3451899
     *
     * © 2017 MyFonts Inc
    */
    -->
    <link rel="stylesheet" type="text/css" href="/fonts/Hollyhock-Regular/Hollyhock-Regular.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/b.css">
    <link rel="stylesheet" href="/js/animsition-master/dist/css/animsition.min.css">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <script>
    document.createElement( "picture" );
    </script>
    <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js" async></script>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="81" >
    <nav  class="fixed-top  container-fluid d-flex  flex-column flex-lg-row flex-nowrap justify-content-end" id="navbar">
        <div class="d-flex flex-row justify-content-between order-lg-2 align-items-center">
            <a href="/" id="logo">
                <img alt="LogoBM" src="/img/bm/LogoBM.svg" class="my-3">
            </a>
            <ul class="socialBox  py-3  d-flex justify-content-center">
                <li><a href="https://www.facebook.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="/img/bm/facebookLogo.svg" alt="Facebook Logo"></a></li>
                <li><a href="https://www.pinterest.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="/img/bm/pinterestLogo.svg" alt="Pinterest Logo"></a></li>
                <li><a href="https://www.instagram.com/baguettemarraine"  target="_blank" class="justify-content-center"><img class="social align-self-center" src="/img/bm/instagramLogo.svg" alt="Instagram Logo"></a></li>
            </ul>
            <div id="nav-icon1" class="align-self-center toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <ul id="navContainer" class="text-center flex-column flex-lg-row order-lg-1 align-self-lg-center"  role="tablist">
            <li class="nav-item  d-lg-flex align-items-lg-center ">
                <a class="nav-link" href="<?php $addRoot(); ?>#home">Home</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
                <a class="nav-link" href="<?php $addRoot(); ?>#about">About us</a>
            </li>
            <li class="nav-item d-lg-flex align-items-lg-center">
              <a class="nav-link <?php if ($section == 'pumps') { echo 'on';} ?>" href="/pumps">Pumps</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
              <a class="nav-link <?php if ($section == 'sandals') { echo 'on';} ?>" href="/sandals">Sandals</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
              <a class="nav-link <?php if ($section == 'booties') { echo 'on';} ?>" href="/booties">Booties</a>
            </li>
            <li class="nav-item  d-lg-flex align-items-lg-center">
                <a class="nav-link" href="<?php $addRoot(); ?>#contact">Contact</a>
            </li>
            <li class="nav-item d-lg-flex align-items-lg-center">
              <a class="nav-link <?php if ($section == 'place-order') { echo 'on';} ?>" href="/order">Order</a>
            </li>
            <!-- <li class="nav-item mb-lg-1 d-flex align-items-md-center justify-content-center">
            </li> -->
        </ul>
    </nav>