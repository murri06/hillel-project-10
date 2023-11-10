<?php

namespace App;

class RadioButton extends InputElement
{

    public function render(): string
    {
        $render = '';
        foreach ($this->arrayNames as $object) {
            $render .= "<label><input type='radio' name='radio' value='$object'>$object</label>";
        }
        return $render;
    }
}