<?php

namespace App;

class FormGenerator
{

    public function __construct(private int    $textFields = 0,
                                private int    $buttons = 0,
                                private string $namesButtons = '',
                                private int    $radioButtons = 0,
                                private int    $selectors = 0)
    {
    }

}