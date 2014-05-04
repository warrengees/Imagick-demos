<?php

namespace ImagickDemo\Imagick;


class enhanceImage extends \ImagickDemo\Example {

    function renderImageURL() {
        return "<img src='/image/Imagick/enhanceImage'/>";
    }

    function renderDescription() {

    }

    function renderImage() {
        $imagick = new \Imagick(realpath($this->imagePath));

        $imagick->enhanceImage();

        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }
}