<?php

namespace App;

use App\FormElement;

class TextField extends FormElement
{

    public function render() : string
    {
        $i = 0;
        $render = '';
        $names = $this->nameSplit($this->names);

        if (!$this->validate($names, $this->number)) {
            return false;
        }

        while ($i < $this->number) {
            $render .= " <input type='text' name='$names[$i]' placeholder='$names[$i]'><br>";
            $i++;
        }
        return $render;
    }
}