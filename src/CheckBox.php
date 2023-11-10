<?php

namespace App;

class CheckBox extends InputElement
{

    public function render(): string
    {
        $render = '';
        foreach ($this->arrayNames as $object) {
            $render .= "<label><input type='checkbox' name='$object' value='$object'>$object</label>";
        }
        return $render;
    }
}