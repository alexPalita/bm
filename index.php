<?php
    $section = null;
    $pageTitle = "La Baguette de la Marraine";
    $jsAsset = "mail";
    include "inc/header.php";

?>
    <main class="contentLandingPage animsition" >
        <section id="home" class="container-fluid homeContainer">
            <div class="d-flex">
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
        <section id="aboutSection">
        <div class="aboutImgContainer text-right">
            <img src="../img/bm/aboutShoe.jpg" alt="Baguette Marraine Shoe">
        </div>
        <div class=" d-flex flex-row justify-content-center sectionTitle">
            <img class="curlLeft align-self-end" alt="svg-curls" src="img/bm/leftArrow.svg">
            <h1 class="pb-4" id="about">The story</h1>
            <img class="curlRight align-self-end" alt="svg-curls" src="img/bm/rightArrow.svg">
        </div>
        <div class="container-fluid px-0 pt-2 carouselContainer">
            <div data-ride="carousel" class="carousel carousel-fade" id="carouselAbout" data-interval="2500">
                <div role="listbox" class="aboutWrapper m-auto carousel-inner d-flex align-items-center">
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5 active" id="firstSlide">
                        <div class="d-block">
                            <p class="text-center">"...a little bit of magic in every step"</p>
                            <p class="text-center">All dreams usually begin as a fairy tale. But all they need to come true is a little bit of magic.</p><br>
                            <p class="text-center strong">
                                <strong>" And for us, that magic begins with the perfect shoes. "</strong>
                            </p><br>
                            <p class="text-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;That’s why our footwear is handcrafted by European ateliers who are sparked by the dream of crafting the perfect shoe. In their workshops, they still use shoe forms, a hammer and mallet, and — most importantly — their hands to craft each and every shoe with impeccable attention to detail.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5" id="thirdtSlide">
                        <div class="d-block">
                            <p class="text-center strong">
                                <strong>" Each shoe is the handcrafted embodiment of a dream come true. "</strong>
                            </p><br>
                            <p class="text-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drawing inspiration from European luxury design and tradition, we create exquisite footwear that is stylish, yet wearable, for the modern woman. Our exclusive shoe line combines the finest natural leathers and vibrant color patterns and weaves them into upscale, original designs that are as beautiful as they are comfortable. Additionally, in a world where “one-size-fits-all” is becoming the norm, we have the ability to create custom looks for each woman’s individuality thanks to our shoes’ handcrafted nature.
                            </p><br>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5" id="fourthSlide">
                        <div class="d-block">
                            <p class="text-center strong">
                                <strong>" And what’s better, it’s still possible to have the perfect shoe at an affordable cost. "</strong>
                            </p><br>
                            <p class="text-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For us, shoes are more than an accessory or utility. They can evoke your individual sense of style, create confidence, exude empowerment, or provide comfort when navigating through cobblestone alleyways or the concrete streets of Fifth Avenue.
                            </p><br>
                            <p class="text-center strong">
                                " We believe that through the magic of beautiful shoes, you can be the fairy godmother of your own dreams. "
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5" id="fifthSlide">
                        <div class="d-block">
                            <p class="text-left">Be confident.</p>
                            <p class="text-center">Be elegant.</p>
                            <p class="text-right">Be remembered.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5" id="sixthSlide">
                        <div class="d-block">
                            <p class="text-center">Be the fairy godmother of your happily ever after.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-8 col-md-6 px-5 pr-md-5" id="seventhSlide">
                        <div class="d-block">
                            <p class="text-center">la Baguette <br>
                                <em>de la</em><br>
                                Marraine</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev">
                    <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section  id="shoes" class="container-fluid justify-content-between d-flex flex-column">
            <div class=" d-flex flex-row justify-content-center sectionTitle">
                <img class="curlLeft align-self-end" alt="svg-curls" src="img/bm/leftArrow.svg">
                    <h1 class="pb-4">Shoes</h1>
                <img class="curlRight align-self-end" alt="svg-curls" src="img/bm/rightArrow.svg">
            </div>
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12 col-sm-6 shoes">
                        <img src="img/bm/borderTop.svg" alt="" class="tBorder">
                            <a href="/pumps" class="shoesImgContainer">
                                <figure class="pumpsA">
                                    <img src="img/bm/pumps.png" alt="Pumps Sketch" id="pumpsSketch">
                                    <figcaption class="shoesLink text-center">PUMPS</figcaption>
                                </figure>
                            </a>
                        <img src="img/bm/borderBottom.svg" alt="" class="bBorder">
                    </div>
                    <img src="img/bm/borderMiddle.svg" alt="" class="col-12 midBorder">
                    <div class="col-12 col-sm-6 shoes">
                        <img src="img/bm/borderTop.svg" alt="" class="tBorder">
                        <a href="/sandals" class="shoesImgContainer">
                            <figure  class="sandalsA">
                                <img src="img/bm/sandals.png" alt="Sandals Sketch" id="sandalsSketch">
                                <figcaption class="shoesLink text-center">SANDALS</figcaption>
                            </figure>
                        </a>
                        <img src="img/bm/borderBottom.svg" alt="" class="bBorder">
                    </div>
                </div>
            </div>
        </section>
        <section id="contactSection" class="container-fluid pb-5">
            <div class=" d-flex flex-row justify-content-center sectionTitle">
                <img class="curlLeft align-self-end" alt="svg-curls" src="img/bm/leftArrow.svg">
                    <h1 class="pb-4" id="contact">Contact</h1>
                <img class="curlRight align-self-end" alt="svg-curls" src="img/bm/rightArrow.svg">
            </div>
            <div class="container py-3">
                <div class="row" id="form">
                    <div class="col-lg-12">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-left mt-md-0">
                                    <div class="d-flex flex-column adressContainer mb-4">
                                        <h2 class="px-2"><strong>E-MAIL ADDRESS:</strong></h2>
                                        <p class="px-0 py-3">iuliana.nita@baguettemarraine.com</p>
                                    </div>
                                    <div class=" d-flex flex-column adressContainer mb-4">
                                        <h2 class="px-2"><strong>PHONE:</strong></h2>
                                        <div class="px-2 py-3">
                                            <a href="tel:+13302086240"><img class="phoneIcon" src="img/bm/phoneLogo.svg" alt="PhoneIcon"></a>
                                            <p class="text-center">+1 330 208 6240</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 contact-form px-0">
                                    <form role="form"  id="sendMailForm" method="post" class="container px-0">
                                        <div class="row">
                                            <div class="form-group group-name col-6">
                                                <label class="sr-only" for="name">Full Name</label>
                                                <input type="text" name="name" placeholder="Full Name" class="contact-name form-control" id="name" value="<?php if (isset($name)) { echo $name;}?>">
                                            </div>
                                            <div class="form-group  group-subject col-6">
                                                <label class="sr-only" for="subject">Subject</label>
                                                <input type="text" name="subject" placeholder="Subject" class="contact-subject form-control" id="subject" value="<?php if (isset($subject)) { echo $subject;}?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group group-email col-12">
                                                <label class="sr-only" for="email">Email</label>
                                                <input type="text" name="email" placeholder="Email" class="contact-email form-control" id="email" value="<?php if (isset($email)) { echo $email;}?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group group-message col-12">
                                                <label class="sr-only" for="emailMessage">Message</label>
                                                <textarea rows="5" name="emailMessage" placeholder="Message" class="contact-message form-control" id="emailMessage" value="<?php if (isset($emailMessage)) { echo $emailMessage;}?>" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group group-trap col-12 sr-only">
                                                <label for="height">Let this field emty</label>
                                                <input type="text" name="height" class="form-control" id="height">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn" id="submit-btn">Send message</button>
                                        </div>
                                    </form>
                                    <div id="messageContainer" class="col-12 px-0 py-5">
                                        <div id="msg" class="alert w-100" role="alert">
                                            <h4 class="alert-heading"></h4>
                                            <p><strong></strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "inc/footer.php" ?>
