<?php

namespace App;

readonly class FormGenerator
{

    public function __construct(private int    $textFields = 0,
                                private string $textFieldsNames = '',
                                private int    $buttons = 0,
                                private string $namesButtons = '',
                                private int    $radioButtons = 0,
                                private string $radioButtonsNames = '',
                                private int    $selectors = 0,
                                private string $options = '')
    {
    }

    public function construct(): string
    {
        $buttons = new Button($this->buttons, $this->namesButtons);
        $textFields = new TextField($this->textFields, $this->textFieldsNames);
        $radioButtons = new RadioButton($this->radioButtons, $this->radioButtonsNames);
        $selector = new Selector($this->selectors, $this->options);

        if ($buttons->validate() && $textFields->validate() && $radioButtons->validate() && $selector->validate()) {
            $construct = '<form method="post"> ';
            $construct .= $textFields->render() . $radioButtons->render() . $selector->render() . $buttons->render();
            $construct .= '</form>';
            return $construct;
        }

        return 'Wrong arguments!';
    }

}