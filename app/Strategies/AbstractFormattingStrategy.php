<?php
namespace App\Strategies;

abstract class AbstractFormattingStrategy implements FormattingStrategy
{
    protected $name;

    public function __construct()
    {
        $this->name = strtolower(class_basename(static::class)) . '_' . date('Y-m-d') . '.txt';
    }

    abstract public function format(array $objects): array;
}
