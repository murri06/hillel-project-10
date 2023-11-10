<?php

namespace App;

class TextField extends FormElement
{

    public function render(): string
    {
        if ($this->number <= 0) {
            return false;
        }
        $render = '';
        $names = $this->nameSplit($this->names);

        foreach ($names as $object) {
            $render .= " <input type='text' name='$object' placeholder='$object'><br>";
        }
        return $render;
    }
}