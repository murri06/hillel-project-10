<?php

namespace App;

class Button extends InputElement
{

    public function render(): string
    {
        $render = '';
        foreach ($this->arrayNames as $object) {
            $render .= "<button name='$object'>$object</button>";
        }
        return $render;
    }

}