<?php

namespace App;

class TextField extends InputElement
{

    public function render(): string
    {
        $render = '';
        foreach ($this->arrayNames as $object) {
            $render .= "<label>$object : <input type='text' name='$object'></label>";
        }
        return $render;
    }
}