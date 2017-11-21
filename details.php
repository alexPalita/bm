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
                <div class="preview shoesContainer d-flex  flex-column flex-md-row mx-auto align-items-center">
                    <div class="tab-content col-12 col-lg-6 mx-auto">
                        <?php
                        $itemimg = $item["img"];
                        // $i = array_keys($itemimg);
                        // for ( $color = 0; $color < 4; $color++ ) {
                        foreach ($itemimg as $key) {
                            foreach ($key as $item => $color) {
                            echo '<div class="tab-pane fade" id='.$color["picIds"].' role="tabpanel" >'
                                .'<a href="'.$color["url"].'">'
                                .'<img class="toEnlarge" alt="Pumps" src="'.$color["url"].'" >'
                                .'</a>'
                                .'</div>';
                                }
                            }
                        ?>
                    </div>
                    <div id="carouselTabPanes" class="carousel d-flex carousel-fade vertical  flex-column flex-md-row details col-12 col-lg-6 mb-5 mb-md-0  align-self-end h-100" data-ride="carousel">
                        <div class="carousel-inner col-2 h-100 p-0 align-self-end">
                            <div class="nav nav-tabs" role="tablist">
                                <?php
                                foreach ($itemimg as $key) {
                                    echo '<div class="carousel-item d-flex flex-row flex-sm-column justify-content-center">';
                                    foreach ($key as $item => $color){
                                        echo '<div class="nav-item">'
                                        .'<a class="nav-link p-0" data-toggle="tab" href="#'.$color["picIds"].'" role="tab" aria-controls="'.$color["picIds"].'">'
                                        .'<img alt="Pumps" src="'.$color["url"].'" />'
                                        .'</a>'
                                        .'</div>';
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselTabPanes" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselTabPanes" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="col-10 mb-5 mb-md-0  align-self-end">
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
                                        ."• <b>Color:</b> "
                                        .'<ol class="carousel-indicators">'
                                        .'<li data-target="#carouselTabPanes" data-slide-to="0" class="active"></li>'
                                        .'<li data-target="#carouselTabPanes" data-slide-to="1"></li>'
                                        .'</ol>'
                                        ."<br>";
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
