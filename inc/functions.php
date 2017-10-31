<?php
function get_item_html ($id,$item) {
    $output = "\n"
            ."\t\t\t\t<li class='col-6 col-lg-3 pt-3 pt-md-5 pumps'>\n"
            ."\t\t\t\t\t<img src='img/bm/borderTop.svg' alt='Ornament' >\n"
            ."\t\t\t\t\t<a href='details.php?id=".$id."' class='anchor'>\n"
            ."\t\t\t\t\t\t<figure  class='figContainer'>\n"
            ."\t\t\t\t\t\t\t<img src='".$item["thumb"]."' alt='".$item["title"]."'>\n"
            ."\t\t\t\t\t\t\t<figcaption class='text-center'>".$item["title"]."</figcaption>\n"
            ."\t\t\t\t\t\t</figure>\n"
            ."\t\t\t\t\t</a>\n"
            ."\t\t\t\t\t<img src='../img/bm/borderBottom.svg' alt='Ornament'>\n"
            ."\t\t\t\t</li>\n";
    return $output;
}

function array_category ($catalog,$category) {
    $output = array();
    foreach($catalog as $id => $item) {
        if (strtolower($category) == strtolower($item["category"])) {
            $sort = key($catalog);
            $output[$id]= $sort;
        } elseif ($category == null) {
            $sort = $item["title"];
            $output[$id] = $sort;
            asort($output);
        }
    }
    return array_keys($output);
}
