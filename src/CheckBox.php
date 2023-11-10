<?php

namespace App;

class CheckBox extends FormElement
{

    public function render(): string|bool
    {
        if ($this->number <= 0) {
            return false;
        }
        $render = '';
        $names = $this->nameSplit($this->names);
        foreach ($names as $object) {
            $render .= "<label><input type='checkbox' name='$object' value='$object'>$object</label><br>";
        }
        return $render;
    }
}