<?php
    $section = "place-order";
    $pageTitle = "Place an Order | La Bagguette de la Marrain";
    $formAsset = "js/orderScript.js";
    include "inc/header.php";
?>
        <main id="place-order" class="container">
            <div class="row">
                <div class=" d-flex flex-row w-100 justify-content-center">
                    <h2>PLACE AN ORDER</h2>
                </div>
            </div>
            <div class="row pt-4 pb-5  justify-content-center">
                <p id="initialMsg" class="col-12 col-lg-6">If you think there is something missing, let us know! Complete the form to send us an email.</p>
                <div class="container pt-4" id="form" >
                    <div class="row row justify-content-center">
                        <div class="contact-form col-12 col-lg-6">
                            <form role="form"  method="post" id="placeOrderForm" class="container px-0">
                                <div class="row">
                                    <div class="form-group group-name col-12 col-sm-6">
                                        <label  for="name">Full Name:</label>
                                        <input type="text" name="name" placeholder="e.g. Jane Doe" class="contact-name form-control" id="name" value="<?php if (isset($name)) { echo $name;}?>">
                                    </div>
                                    <div class="form-group group-email col-12 col-sm-6">
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" placeholder="e.g. user@email.com" class="contact-email form-control" id="email" value="<?php if (isset($email)) { echo $email;}?>" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-productName col-8 col-sm-6">
                                        <label for="productName">Product Name:</label>
                                        <input type="text" name="productName" placeholder="Product Name" class="contact-productName form-control" id="productName" value="<?php if(isset($_GET["product_name"]) && $_GET["product_name"]!="") { echo str_replace("-"," ",$_GET["product_name"]);}?>" >
                                    </div>
                                    <div class="form-group col-4 col-sm-6">
                                      <label for="size">Size</label>
                                      <select id="size" name="size" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="5" <?php if (isset($size) && $size=="5") {
                                echo " selected";}?> > 5 </option>
                                        <option value="5.5" <?php if (isset($size) && $size=="5.5") {
                                echo " selected";}?> >5.5</option>
                                        <option value="6" <?php if (isset($size) && $size=="6") {
                                echo " selected";}?> >6</option>
                                        <option value="6.5" <?php if (isset($size) && $size=="6.5") {
                                echo " selected";}?> >6.5</option>
                                        <option value="7" <?php if (isset($size) && $size=="7") {
                                echo " selected";}?> >7</option>
                                        <option value="7.5" <?php if (isset($size) && $size=="7.5") {
                                echo " selected";}?> >7.5</option>
                                        <option value="8" <?php if (isset($size) && $size=="8") {
                                echo " selected";}?> >8</option>
                                        <option value="8.5" <?php if (isset($size) && $size=="8.5") {
                                echo " selected";}?> >8.5</option>
                                        <option value="9" <?php if (isset($size) && $size=="9") {
                                echo " selected";}?> >9</option>
                                        <option value="9.5" <?php if (isset($size) && $size=="9.5") {
                                echo " selected";}?> >9.5</option>
                                        <option value="10" <?php if (isset($size) && $size=="10") {
                                echo " selected";}?> >10</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-message col-12">
                                        <label for="details">Other Details:</label>
                                        <textarea rows="5" name="details" placeholder="e.g. Details,Colors,Textures" class="contact-message form-control" id="details"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-trap col-12 sr-only">
                                        <label for="height">Let this field emty</label>
                                        <input type="text" name="height" class="form-control" id="height">
                                    </div>
                                </div>
                                <div class="row justify-content-around">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#sizeChart">Size Chart</button>
                                    <button type="submit" class="btn" id="submit-btn">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="messageContainer" class="col-12 col-lg-6 px-0 py-5">
                    <div id="msg" class="alert w-100" role="alert">
                        <h4 class="alert-heading"></h4>
                        <p><strong></strong></p>
                    </div>
                </div>
            </div>
        </main>
<?php
    include "inc/modalSizeChart.php";
    include "inc/footer.php";
 ?>
