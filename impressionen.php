<?php

$directory = "assets/images/impressions/*/";
$images = glob("" . $directory . "*.jpg");

foreach ($images as $image) {
    printImage($image);
} 

function printImage($currentImage) {
    echo "<div class=\"col-md-2 col-xs-6 mb-4\">";
    echo "<a href=\"$currentImage\" class=\"link-block\" data-toggle=\"lightbox\" data-gallery=\"gallery-impressionen\">";
    echo "<img src=\"$currentImage\" class=\"img-thumbnail\" />";
    echo "</a></div>";
}
?>

