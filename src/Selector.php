<?php

namespace App;

class Selector extends InputElement
{

    public function render(): string
    {
        $render = '<select>';
        foreach ($this->arrayNames as $object) {
            $render .= "<option value='$object'>$object";
        }
        $render .= '</select>';
        return $render;
    }
}