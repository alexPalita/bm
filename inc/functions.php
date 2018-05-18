<?php
function get_item_html ($id,$item) {
    $title = str_replace(" ","-",$item['title']);
    // $title = rawurlencode($title);
    $category = $item['category'];
    $output = "\n"
            ."<li class='col-6 col-lg-3 pt-3 pt-md-5 pumps'>\n"
            ."<img src='/img/bm/borderTop.svg' alt='Ornament' >\n"
            ."<a class='anchor' href='".$category."/".$id."/".$title."'>\n"
            ."<figure  class='figContainer'>\n"
            ."<img src='".$item["thumb"]."' alt='".$item["title"]."'>\n"
            ."<figcaption class='text-center'>".$item["title"]."</figcaption>\n"
            ."</figure>\n"
            ."</a>\n"
            ."<img src='/img/bm/borderBottom.svg' alt='Ornament'>\n"
            ."</li>\n";
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