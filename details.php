<?php
include "inc/items.php";
include "inc/functions.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if(isset($catalog[$id])) {
        $item = $catalog[$id];
    }
}
// print_r($item);

if (!isset($item)) {
    header("location:catalog.php");
}


$h1Title = $item["title"];
$pageTitle = "$h1Title | La Bagguette de la Marraine";
$section = null;

include "inc/header.php";
 ?>
        <main class="container productContainer">
            <div class="breadcrumbs">
                <a href="catalog.php">Shoes</a>
                &#124;
                <a href="catalog.php?cat=<?php echo strtolower($item["category"]);?>">
                <?php echo ucfirst($item["category"])?></a>
                &#124;
                <?php echo $item["title"]; ?>
            </div>
            <div class="wrapper row text-center">
                <div class="preview shoesContainer col-12 col-md-6 mx-auto align-items-center">
                    <div class="tab-content col-12 col-md-10 mx-auto">
                        <?php
                        $itemimg = $item["img"];
                        // $i = array_keys($itemimg);
                        foreach ($itemimg as $key) {
                        echo '<div class="tab-pane" id='.$key["picIds"].' role="tabpanel">'
                            .'<img alt="Pumps" src="'.$key["url"].'" >'
                            .'</div>';
                        }
                        ?>
                    </div>
                    <img src="img/bm/borderMiddle.svg" alt="" class="midBorderPreview">
                    <ul class="nav nav-tabs col-12 col-lg-10 px-0 mx-auto" role="tablist">
                        <?php
                        foreach ($itemimg as $key) {
                        echo '<li class="nav-item">'
                            .'<a class="nav-link" data-toggle="tab" href="#'.$key["picIds"].'" role="tab" aria-controls="'.$key["picIds"].'">'
                            .'<img alt="Pumps" src="'.$key["url"].'" />'
                            .'</a>'
                            .'</li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="details col-12 col-md-6 mb-5 mb-md-0">
                    <div class="d-flex flex-row w-100 justify-content-center">
                        <h1><?php echo $h1Title; ?></h1>
                    </div>
                    <div class="d-flex flex-row my-5 productDetails">
                        <div class="text-left my-5">
                            <h4 class="px-2"><strong>PRODUCT DETAILS:</strong></h4>
                            <p class="px-2 py-3 mb-0">
                                <?php
                                echo
                                "• <b>Product code:</b> ".$item["code"]."<br>"
                                ."• <b>Details:</b> ".$item["details"]."<br>"
                                ."• <b>Heel Height:</b> ".$item["heelHeight"]." inch<br>"
                                ."• <b>Composition:</b> ".$item["composition"]."<br>"
                                ."• <b>Color:</b> ".$item["color"]."<br>";
                                if ($item["colorAvailable"] == true) {
                                 echo " *Other colors available upon request<br>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-around my-5 bottonsProductDetails">
                        <button type="button" class="btn"	data-toggle="modal" data-target="#sizeChart">Size Chart
                        </button>
                        <a href="../../../place-order/" class="btn" role="button" aria-pressed="true">Place an Order</a>
                    </div>
                </div>
            </div>
        </main>
<?php
include "inc/modalSizeChart.php";
include "inc/footer.php";
 ?>
