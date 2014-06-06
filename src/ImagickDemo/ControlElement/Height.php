<?php


namespace ImagickDemo\ControlElement;


class Height extends ValueElement {

    protected function getDefault() {
        return 5;
    }

    protected function getMin() {
        return 0;
    }

    protected function getMax() {
        return 20;
    }

    protected function getVariableName() {
        return 'height';
    }

    protected function getDisplayName() {
        return 'Height';
    }

    function getHeight() {
        return $this->getValue();
    }
}