<?php
    $section = "place-order";
    $pageTitle = "Place an Order | La Bagguette de la Marrain";
    include "inc/header.php";
?>
        <main id="place-order" class="container">
            <div class="row">
                <div class=" d-flex flex-row w-100 justify-content-center">
                    <h2>PLACE AN ORDER</h2>
                </div>
            </div>
            <div class="row py-5">
                <div class="container" id="form">
                    <div class="row row justify-content-center">
                        <div class="contact-form col-12 col-lg-8">
                            <form role="form" action="form-assets/order.php" method="post" class="container px-0">
                                <div class="row">
                                    <div class="form-group group-name col-12">
                                        <label class="sr-only" for="contact-name">Full Name</label>
                                        <input type="text" name="name" placeholder="Full Name" class="contact-name form-control" id="contact-name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-email col-12">
                                        <label class="sr-only" for="contact-email">Email</label>
                                        <input type="text" name="email" placeholder="Email" class="contact-email form-control" id="contact-email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group group-productName col-6">
                                        <label class="sr-only" for="contact-productName">Product Name</label>
                                        <input type="text" name="productName" placeholder="Product Name" class="contact-productName form-control" id="contact-productName" value="<?php if(isset($_GET["product_name"]) && $_GET["product_name"]!="") { echo $_GET["product_name"];  } ?>">
                                    </div>
                                    <div class="form-group group-size col-6">
                                        <label class="sr-only" for="contact-size">Size</label>
                                        <input type="text" name="size" placeholder="Size" class="contact-size form-control" id="contact-size">
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
                                <div class="row justify-content-around">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#sizeChart">Size Chart</button>
                                    <button type="submit" class="btn">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="sizeChart">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">SIZE CHART</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead class="thead-inverse table-bordered">
                                <tr>
                                  <th>USA</th>
                                  <th>Europe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>5</td>
                                  <td>35</td>
                                </tr>
                                <tr>
                                  <td>5.5</td>
                                  <td>35.5</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>36</td>
                                </tr>
                                <tr>
                                  <td>6.5</td>
                                  <td>36.5</td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>37</td>
                                </tr>
                                <tr>
                                  <td>7.5</td>
                                  <td>37.5</td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>38</td>
                                </tr>
                                <tr>
                                  <td>8.5</td>
                                  <td>38.5</td>
                                </tr>
                                <tr>
                                  <td>9</td>
                                  <td>39</td>
                                </tr>
                                <tr>
                                  <td>9.5</td>
                                  <td>39.5</td>
                                </tr>
                                <tr>
                                  <td>10</td>
                                  <td>40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
<?php
    include "inc/footer.php";
 ?>
