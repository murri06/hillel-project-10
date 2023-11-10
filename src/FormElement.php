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
        if ($this->number === 0) {
            return [];
        }
        return explode(',', $name);
    }

    public function validate(): bool
    {
        return count($this->nameSplit($this->names)) === $this->number;
    }
}