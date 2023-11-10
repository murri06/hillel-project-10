<?php

namespace App;

class Button extends FormElement
{

    public function render(): string
    {
        $i = 0;
        $render = '';
        $names = $this->nameSplit($this->names);

        if (!$this->validate($names, $this->number)) {
            return false;
        }

        while ($i < $this->number) {
            $render .= "<button name='$names[$i]'>$names[$i]</button><br>";
            $i++;
        }
        return $render;
    }

}