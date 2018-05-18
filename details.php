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
        <main class="container-fluid  d-flex flex-column flex-md-row  productContainer animsition">
            <div class="wrapper row text-center">
                <div class="preview shoesContainer col-12 col-md-6 col-lg-7 px-0 mx-auto align-items-center">
                      <div class="tab-content " id="nav-tabContent">
                            <?php
                            $itemimg = $item["img"];
                            // $itemkeys = array_keys($item["img"]);
                            foreach ($itemimg as $key => $value) {
                            $keyColor = ucfirst(strstr($key,",",true));
                            echo '<div class="tab-pane flex-nowrap fade" id="list-'.$keyColor.'" role="tabpanel"      aria-labelledby="list-'.$keyColor.'-list">'
                                .'<div class="tab-content order-lg-2 mx-auto col-lg-10" >';
                                foreach($value as $color) {
                                $id = substr($color, strrpos($color, '/') + 1);
                                $imgID = strstr($id,".",true);
                                echo    '<div class="tab-pane fade" id='.$imgID.' role="tabpanel" >'
                                            .'<a href="'.$color.'">'
                                            .'<img class="toEnlarge" alt="Pumps" src="'.$color.'" >'
                                            .'</a>'
                                       .'</div>';
                                    }
                                echo '</div>'
                                .'<ul class="nav nav-tabs order-lg-1 col-lg-2 px-0 mx-auto justify-content-center align-content-start" role="tablist">';
                                foreach($value as $color) {
                                $id = substr($color, strrpos($color, '/') + 1);
                                $imgID = strstr($id,".",true);
                                echo '<li class="nav-item col-3 col-lg-12 p-0">'
                                        .'<a class="nav-link p-0 " data-toggle="tab" href="#'.$imgID.'" role="tab" aria-controls="'.$imgID.'">'
                                            .'<img alt="Pumps" src="'.$color.'" />'
                                        .'</a>'
                                    .'</li>';
                                }
                                echo '</ul>'
                            .'</div>';
                            }
                            ?>
                        </div>
                </div>
                <div class="details col-12 col-md-6 col-lg-5 mb-5 mb-md-0 px-0 align-self-start">
                    <div class=" d-flex flex-row justify-content-center sectionTitle">
                        <img class="curlLeft align-self-end" alt="svg-curls" src="/img/bm/leftArrow.svg">
                            <h1 class="pb-4"><?php echo $h1Title?></h1>
                        <img class="curlRight align-self-end" alt="svg-curls" src="/img/bm/rightArrow.svg">
                    </div>
                    <div class="productDetails">
                        <div class=" d-flex flex-column text-left my-5">
                            <h4 class="px-4"><strong>PRODUCT DETAILS:</strong></h4>
                            <div class="px-4 py-0 mb-0">
                                <?php
                                echo
                                "• <b>Product code:</b> ".$item["code"]."<br>"
                                ."• <b>Details:</b> ".$item["details"]."<br>"
                                ."• <b>Heel Height:</b> ".$item["heelHeight"]." inch<br>"
                                ."• <b>Composition:</b> ".$item["composition"]."<br>"
                                ."• <b>Color:</b> ";
                                if ($item["color"] == true) {
                                 echo " *Other colors available upon request<br>";
                                }
                                echo "<br>"
                                .'<div class="list-group" id="list-tab" role="tablist">';
                                foreach ($itemimg as $key => $value) {
                                    $keyColor = ucfirst(strstr($key,",",true));
                                    $keyHex = strstr($key,",",false);
                                    $keyHex = str_replace(",","",$keyHex);
                                    echo
                                    '<a class="list-group-item-action d-flex flex-column text-center" id="list-'.$keyColor.'-list" data-toggle="list" href="#list-'.$keyColor.'" role="tab" aria-controls="list-'.$keyColor.'">'
                                    .'<span class="colorCircle m-auto"  style="background-color:#'.$keyHex.'"></span>'
                                    .'<b>'.$keyColor.'</b>'
                                    .'</a>';
                                 }
                                 echo
                                 '</div>';
                                ?>
                            </div>
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
                        <img src="<?php echo $item['thumb']?>" class="enlargeImageModalSource" alt="<?php echo $h1Title?>">
                    </div>
                </div>
            </div>
        </div>
<?php
include "inc/modalSizeChart.php";
include "inc/footer.php";
 ?>