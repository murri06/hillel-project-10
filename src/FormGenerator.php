<?php

namespace App;

class FormGenerator extends BaseElement
{

    protected array $elements = [];

    public function addElement(InputElement $element): void
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $content = '';
        foreach ($this->elements as $object) {
            if ($object->validate()) {
                $content .= $object->render() . "<br>";
            }
        }
        return "<form> $content</form>";
    }
}