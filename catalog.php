<?php
    include "inc/items.php";
    include "inc/functions.php";
    if (isset($_GET["cat"])) {
        if ($_GET["cat"] == "pumps") {
            $h1Title = "Pumps";
            $section = "pumps";
        } elseif ($_GET["cat"] == "sandals") {
            $h1Title = "Sandals";
            $section = "sandals";
        }
    }
    $h1Title = "Shoes";
    $section = null;
    $formAsset = null;
    $pageTitle = "$h1Title | La Bagguette de la Marraine";
    include "inc/header.php";
?>
    <main class="contentShoesPage container d-flex flex-column text-left px-0 animsition">
        <div class=" d-flex flex-row justify-content-center sectionTitle">
            <img class="curlLeft align-self-end" alt="svg-curls" src="img/bm/leftArrow.svg">
                <h1 class="pb-4"><?php echo $h1Title?></h1>
            <img class="curlRight align-self-end" alt="svg-curls" src="img/bm/rightArrow.svg">
        </div>
        <div class="shoesContainer container pb-5">
          <ul class="row">
                <?php
                $categories = array_category($catalog,$section);
                foreach ($categories as $id) {
                    echo get_item_html($id,$catalog[$id]);
                }
                 ?>
            </ul>
        </div>
    </main>
<?php
    include "inc/footer.php";
 ?>
