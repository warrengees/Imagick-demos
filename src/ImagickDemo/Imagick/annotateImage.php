<?php

namespace ImagickDemo\Imagick;


class annotateImage extends \ImagickDemo\Example {


    function render() {
        $output = "This is a description. <br/>";
        $output .= $this->renderImageURL();
        return $output;
    }
}