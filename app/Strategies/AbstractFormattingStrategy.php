<?php
namespace App\Strategies;

abstract class AbstractFormattingStrategy implements FormattingStrategy
{
    protected $name;

    public function __construct()
    {
        $this->name = strtolower(class_basename(static::class)) . '_' . date('Y-m-d') . '.txt';
    }

    public function formatObjects(array $objects): array
    {
        $formattedObjects = [];

        foreach ($objects as $object) {
            $formattedObjects[] = $this->formatObject($object);
        }

        return $formattedObjects;
    }

    abstract public function formatObject(object $object): array;

    public function getName(): string
    {
        return $this->name;
    }
}
