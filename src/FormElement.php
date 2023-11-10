<?php

namespace App;

abstract class FormElement
{

    public function __construct(protected readonly int $number, protected readonly string $names)
    {
    }

    abstract public function render(): string|bool;

    protected function nameSplit(string $name): array
    {
        return explode(',', $name);
    }

    protected function validate(array $name, int $number): bool
    {
        return count($name) === $number;
    }
}