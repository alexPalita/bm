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
$section = $item["title"];
$jsAsset = null;

include "inc/header.php";
 ?>
        <main class="container-fluid productContainer animsition">
            <div class="wrapper row text-center">
                <div class="preview shoesContainer col-12 col-lg-6 mx-auto align-items-center">
                    <div class="tab-content col-12 col-lg-8 mx-auto">
                        <?php
                        $itemimg = $item["img"];
                        // $i = array_keys($itemimg);
                        foreach ($itemimg as $key) {
                        echo '<div class="tab-pane fade" id='.$key["picIds"].' role="tabpanel" >'
                            .'<a href="'.$key["url"].'">'
                            .'<img class="toEnlarge" alt="Pumps" src="'.$key["url"].'" >'
                            .'</a>'
                            .'</div>';
                        }
                        ?>
                    </div>
                    <img src="/img/bm/borderMiddle.svg" alt="" class="midBorderPreview">
                    <ul class="nav nav-tabs col-12 col-lg-8 px-0 mx-auto justify-content-center" role="tablist">
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
                <div class="details col-12 col-lg-6 mb-5 mb-md-0  align-self-end">
                    <div class=" d-flex flex-row justify-content-center sectionTitle">
                        <img class="curlLeft align-self-end" alt="svg-curls" src="/img/bm/leftArrow.svg">
                            <h1 class="pb-4"><?php echo $h1Title?></h1>
                        <img class="curlRight align-self-end" alt="svg-curls" src="/img/bm/rightArrow.svg">
                    </div>
                    <div class="d-flex flex-row my-1 productDetails">
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
                        <a href="/place-order/<?php echo str_replace(" ","-",$h1Title) ?>" class="btn" role="button" aria-pressed="true">Place an Order</a>
                    </div>
                </div>
            </div>
        </main>
        <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title"><?php echo $h1Title?></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" class="enlargeImageModalSource">
                    </div>
                </div>
            </div>
        </div>
<?php
include "inc/modalSizeChart.php";
include "inc/footer.php";
 ?>
