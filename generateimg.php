<?php
    if ($_POST["name"] != "") {
        $fontname = $_POST["font"];
        $name = $_POST["name"];
        $image = "<img style='width: {$_POST["width"]}; height: {$_POST["height"]}'>";
        imagepng($image, NULL, 9);
    }

    $name = $_POST["name"];
    $my_img = imagecreate(200, 80);
    $background = imagecolorallocate($my_img, 0, 0, 255);
    $text_colour = imagecolorallocate($my_img, 255, 255, 0);
    $line_colour = imagecolorallocate($my_img, 128, 255, 0);
    imagestring($my_img, 4, 30, 25, "TEST", $text_colour);
    imagesetthickness($my_img, 5);
    imageline($my_img, 30, 45, 165, 45, $line_colour);
    header("Content-type: image/png");
    imagepng($my_img);
    imagecolordeallocate($line_colour);
    imagecolordeallocate($text_colour);
    imagecolordeallocate($background);
    imagedestroy($my_img);
    imagepng($my_img);
    $my_img = imagepng($my_img);

    function helloworld($my_img){
        return $my_img;
    }

    helloworld($my_img);

