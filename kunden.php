<?php

$directory = "assets/images/brands/*";
$images = glob("" . $directory . "*.jpg");

foreach ($images as $image) {
    printImage($image);
} 

function printImage($currentImage) {
    echo "<img src='$currentImage' />";
}
?>
