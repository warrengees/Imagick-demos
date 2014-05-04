<?php


namespace ImagickDemo\Imagick;


class spliceImage extends \ImagickDemo\Example {

    function renderImageURL() {
        return "<img src='/image/Imagick/spliceImage'/>";
    }

    function renderDescription() {

    }

    function renderImage() {

        $imagick = new \Imagick(realpath($this->imagePath));

        $imagick->spliceImage(50, 50, 100, 100);

        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }
}