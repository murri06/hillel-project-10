<?php

namespace App;

class Selector extends FormElement
{

    public function render(): string|bool
    {
        if ($this->number <= 0) {
            return false;
        }
        $render = '<select>';
        $names = $this->nameSplit($this->names);
        foreach ($names as $object) {
            $render .= "<option value='$object'>$object<br>";
        }
        $render .= '</select> <br>';
        return $render;
    }
}