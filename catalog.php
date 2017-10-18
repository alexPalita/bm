<?php
    include "inc/items.php";
    include "inc/functions.php";
    $h1Title = "Shoes";
    $section = null;
    if (isset($_GET["cat"])) {
        if ($_GET["cat"] == "pumps") {
            $h1Title = "Pumps";
            $section = "pumps";
        } elseif ($_GET["cat"] == "sandals") {
            $h1Title = "Sandals";
            $section = "sandals";
        }
    }

    $pageTitle = "$h1Title | La Bagguette de la Marraine";
    include "inc/header.php";
?>
    <main class="contentShoesPage container d-flex flex-column text-center px-0">
        <div class="breadcrumbs"><?php
            if($section != null){
                    echo "<a href='catalog.php'>Shoes</a> &#124; ";
                }
                echo "<span>$h1Title</span>"; ?>
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
    </main>
<?php
    include "inc/footer.php";
 ?>
