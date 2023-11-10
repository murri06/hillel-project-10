<?php

namespace App;

class RadioButton extends FormElement
{

    public function render(): string|bool
    {
        if ($this->number <= 0) {
            return false;
        }
        $render = '';
        $names = $this->nameSplit($this->names);
        foreach ($names as $object) {
            $render .= "<input type='radio' name='radio' value='$object'>$object<br>";
        }
        return $render;
    }
}