<?php
    $section = "place-order";
    $pageTitle = "Place an Order | La Bagguette de la Marrain";
    $formAsset = "js/order-script.js";
    include "inc/header.php";
?>
        <main id="place-order" class="container">
            <div class="row">
                <div class=" d-flex flex-row w-100 justify-content-center">
                    <h2>PLACE AN ORDER</h2>
                </div>
            </div>
            <div class="row py-5">
                <p id="msg" class="col-12 col-lg-6 m-auto">If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>
                <div class="container" id="form" class="pt-3">
                    <div class="row row justify-content-center">
                        <div class="contact-form col-12 col-lg-6">
                            <form role="form" action="form-assets/order.php" method="post" class="container px-0">
                                <div class="row">
                                    <div class="form-group group-name col-6">
                                        <label  for="firstName">First Name:</label>
                                        <input type="text" name="firstName" placeholder="e.g. Jane" class="contact-name form-control" id="firstName">
                                    </div>
                                    <div class="form-group group-name col-6">
                                        <label  for="lastName">Last Name:</label>
                                        <input type="text" name="lastName" placeholder="e.g. Doe" class="contact-name form-control" id="lastName">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-email col-12">
                                        <label for="contact-email">Email:</label>
                                        <input type="text" name="email" placeholder="e.g. user@email.com" class="contact-email form-control" id="contact-email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-productName col-6">
                                        <label for="contact-productName">Product Name:</label>
                                        <input type="text" name="productName" placeholder="Product Name" class="contact-productName form-control" id="contact-productName" value="<?php if(isset($_GET["product_name"]) && $_GET["product_name"]!="") { echo $_GET["product_name"];  } ?>">
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="inputState">State</label>
                                      <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>35</option>
                                        <option>35.5</option>
                                        <option>36</option>
                                        <option>36.5</option>
                                        <option>37</option>
                                        <option>37.5</option>
                                        <option>38</option>
                                        <option>38.5</option>
                                        <option>39</option>
                                        <option>39.5</option>
                                        <option>40</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-message col-12">
                                        <label for="contact-message">Message:</label>
                                        <textarea rows="5" name="message" placeholder="e.g. Details,Colors,Textures" class="contact-message form-control" id="contact-message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-trap col-12 sr-only">
                                        <label for="address">Let this field emty</label>
                                        <input type="text" name="address" class="form-control" id="address">
                                    </div>
                                </div>
                                <div class="row justify-content-around">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#sizeChart">Size Chart</button>
                                    <button type="submit" class="btn">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    include "inc/modalSizeChart.php";
    include "inc/footer.php";
 ?>
