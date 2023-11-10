<?php

namespace App;

class Button extends FormElement
{

    public function render(): string
    {
        if ($this->number <= 0) {
            return false;
        }
        $render = '';
        $names = $this->nameSplit($this->names);
        foreach ($names as $object) {
            $render .= "<button name='$object'>$object</button><br>";
        }
        return $render;
    }

}