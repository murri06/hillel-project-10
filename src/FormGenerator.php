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
                                private int    $numberOptions = 0,
                                private string $options = '',
                                private int    $numberCheckBox = 0,
                                private string $namesCheckBox = '')
    {
    }

    public function constructForm(): string
    {
        $buttons = new Button($this->buttons, $this->namesButtons);
        $textFields = new TextField($this->textFields, $this->textFieldsNames);
        $radioButtons = new RadioButton($this->radioButtons, $this->radioButtonsNames);
        $selector = new Selector($this->numberOptions, $this->options);
        $checkBox = new CheckBox($this->numberCheckBox, $this->namesCheckBox);

        if ($buttons->validate() && $textFields->validate() && $radioButtons->validate() && $selector->validate() && $checkBox->validate()) {
            $construct = '<form method="post"> ';
            $construct .= $textFields->render() . $radioButtons->render() . $selector->render() . $checkBox->render() . $buttons->render();
            $construct .= '</form>';
            return $construct;
        }

        return 'Аргументи були введені невірно!';
    }

}