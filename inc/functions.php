<?php
function get_item_html ($id,$item) {
    $output = "<li class='col-6 col-lg-3 pt-3 pt-md-5 pumps'>"
            ."<img src='img/bm/borderTop.svg' alt='Ornament' >"
            ."<a href='details.php?id=".$id."' class='anchor'>"
            ."<figure  class='figContainer'>"
            ."<img src='".$item["thumb"]."' alt='".$item["title"]."'>"
            ."<figcaption class='text-center'>".$item["title"]."</figcaption>"
            ."</figure>"
            ."</a>"
            ."<img src='../img/bm/borderBottom.svg' alt='Ornament' >"
            ."</li>";
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
