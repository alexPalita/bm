<?php
    $section = null;
    $pageTitle = "La Baguette de la Marraine";
    include "inc/header.php";
?>
    <main class="contentLandingPage">
        <section id="home" class="container-fluid homeContainer">
            <div class="d-flex flex-row">
                <picture class="m-auto">
                  <source srcset="img/bm/CoverDesktop-xxl.jpg" id="coverXXLarge" class="cover" media="(min-width: 1400px)">
                  <source srcset="img/bm/CoverDesktop-xl.jpg" id="coverXLarge" class="cover" media="(min-width: 992px)">
                  <source srcset="img/bm/CoverMobile.jpg" id="coverMedPortrait" class="cover" media="(min-width: 768px) and (orientation: portrait)">
                  <source srcset="img/bm/CoverDesktop-lg.jpg" id="coverLarge" class="cover" media="(min-width: 768px) and (orientation: landscape)">
                  <source srcset="img/bm/CoverDesktop-lg.jpg" id="coverSmallPortrait" class="cover" media="(max-width: 767px) and (orientation: landscape)">
                  <img src="img/bm/CoverMobile.jpg" id="coverSmall" class="cover" alt="BaguetteMarraine-Sketch">
                </picture>
                <h1>la Baguette <em>de la</em> Marraine</h1>
            </div>
        </section>
        <section id="about">
                        <div class="container-fluid px-0" id="aboutContainer">
                            <div class="d-flex flex-row w-100 pb-3 justify-content-center">
                                <h1>The story</h1>
                            </div>
                            <div data-ride="carousel" class="carousel carousel-fade" id="carouselAbout" data-interval="2500">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#carouselAbout"></li>
                                    <li data-slide-to="1" data-target="#carouselAbout" class=""></li>
                                    <li data-slide-to="2" data-target="#carouselAbout" class=""></li>
                                </ol>
                                <div role="listbox" class="carousel-inner">
                                    <div class="carousel-item d-flex align-items-start active" id="firstSlide">
                                        <div class="">
                                            <p>"...a little bit of magic in every step"</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item d-flex align-items-start " id="secondSlide">
                                        <div class="">
                                            <p>All dreams usually begin as a fairy tale. But all they need to come true is a little bit of magic.</p><br>
                                            <p class=" strong">
                                                <strong>" And for us, that magic begins with the perfect shoes. "</strong>
                                            </p><br>
                                            <p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;That’s why our footwear is handcrafted by European ateliers who are sparked by the dream of crafting the perfect shoe. In their workshops, they still use shoe forms, a hammer and mallet, and — most importantly — their hands to craft each and every shoe with impeccable attention to detail.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item d-flex align-items-start " id="thirdtSlide">
                                        <div class="">
                                            <p class=" strong">
                                                <strong>" Each shoe is the handcrafted embodiment of a dream come true. "</strong>
                                            </p><br>
                                            <p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drawing inspiration from European luxury design and tradition, we create exquisite footwear that is stylish, yet wearable, for the modern woman. Our exclusive shoe line combines the finest natural leathers and vibrant color patterns and weaves them into upscale, original designs that are as beautiful as they are comfortable. Additionally, in a world where “one-size-fits-all” is becoming the norm, we have the ability to create custom looks for each woman’s individuality thanks to our shoes’ handcrafted nature.
                                            </p><br>
                                        </div>
                                    </div>
                                    <div class="carousel-item d-flex align-items-start" id="fourthSlide">
                                        <div class="">
                                            <p class=" strong">
                                                <strong>" And what’s better, it’s still possible to have the perfect shoe at an affordable cost. "</strong>
                                            </p><br>
                                            <p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For us, shoes are more than an accessory or utility. They can evoke your individual sense of style, create confidence, exude empowerment, or provide comfort when navigating through cobblestone alleyways or the concrete streets of Fifth Avenue.
                                            </p><br>
                                        </div>
                                    </div>
                                    <div class="carousel-item d-flex align-items-start" id="fifthSlide">
                                        <div class="">
                                            <p class=" strong">
                                                " We believe that through the magic of beautiful shoes, you can be the fairy godmother of your own dreams. "
                                            </p><br>
                                            <p class="text-left">Be confident.</p>
                                            <p class="text-center">Be elegant.</p>
                                            <p class="text-right">Be remembered.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item d-flex align-items-start" id="sixthSlide">
                                        <div class="">
                                            <p class="text-center">Be the fairy godmother of your happily ever after.</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item d-flex align-items-start" id="seventhSlide">
                                        <div class="">
                                            <p class="text-right">la Baguette <em>de la</em> Marraine</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" role="button" href="#carouselAbout" class="carousel-control-prev">
                                    <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a data-slide="next" role="button" href="#carouselAbout" class="carousel-control-next">
                                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <section  id="shoes" class="container-fluid justify-content-between d-flex flex-column">
            <div class=" d-flex flex-row w-100 justify-content-center">
                <h1>Shoes</h1>
            </div>
            <div class="container my-5 my-sm-0">
                <div class="row">
                    <div class="col-12 col-sm-6 shoes">
                        <img src="img/bm/borderTop.svg" alt="">
                            <a href="shoes/#pumps" class="shoesImgContainer">
                                <figure class="pumpsA">
                                    <img src="img/bm/pumps.svg" alt="Pumps Sketch" id="pumpsSketch">
                                    <figcaption class="shoesLink text-center">Pumps</figcaption>
                                </figure>
                            </a>
                        <img src="img/bm/borderBottom.svg" alt="" class="bBorder">
                    </div>
                    <img src="img/bm/borderMiddle.svg" alt="" class="col-12 midBorder">
                    <div class="col-12 col-sm-6 shoes">
                        <img src="img/bm/borderTop.svg" alt="" class="tBorder">
                        <a href="shoes/#sandals" class="shoesImgContainer">
                            <figure  class="sandalsA">
                                <img src="img/bm/sandals.svg" alt="Sandals Sketch" id="sandalsSketch">
                                <figcaption class="shoesLink text-center">Sandals</figcaption>
                            </figure>
                        </a>
                        <img src="img/bm/borderBottom.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container-fluid pb-5">
                <div class="row">
                    <div class=" d-flex flex-row w-100 justify-content-center">
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row" id="form">
                        <div class="col-lg-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-center text-md-left mt-md-0">
                                        <div class="d-flex flex-column adressContainer mb-4">
                                            <h2 class="px-2"><strong>E-MAIL ADDRESS:</strong></h2>
                                            <p class="px-2 py-3">iuliana.nita@baguettemarraine.com</p>
                                        </div>
                                        <div class=" d-flex flex-column adressContainer mb-4">
                                            <h2 class="px-2"><strong>PHONE:</strong></h2>
                                            <div class="px-2 py-3">
                                                <a href="tel:+13302086240"><img class="phoneIcon" src="img/bm/phoneLogo.svg" alt="PhoneIcon"></a>
                                                <p>+1 330 208 6240</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 contact-form px-0">
                                        <form role="form" action="form-assets/contact.php" method="post" class="container px-0">
                                            <div class="row">
                                                <div class="form-group group-name col-6">
                                                    <label class="sr-only" for="contact-name">Full Name</label>
                                                    <input type="text" name="name" placeholder="Full Name" class="contact-name form-control" id="contact-name">
                                                </div>
                                                <div class="form-group  group-subject col-6">
                                                    <label class="sr-only" for="contact-subject">Subject</label>
                                                    <input type="text" name="subject" placeholder="Subject" class="contact-subject form-control" id="contact-subject">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group group-email col-12">
                                                    <label class="sr-only" for="contact-email">Email</label>
                                                    <input type="text" name="email" placeholder="Email" class="contact-email form-control" id="contact-email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group group-message col-12">
                                                    <label class="sr-only" for="contact-message">Message</label>
                                                    <textarea rows="5" name="message" placeholder="Message" class="contact-message form-control" id="contact-message"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group group-antispam col-12">
                                                    <label for="contact-antispam">Antispam question: 7 + 5 = ?</label>
                                                    <input type="text" name="antispam" placeholder="Your answer" class="contact-antispam form-control" id="contact-antispam">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <?php include "inc/footer.php" ?>
