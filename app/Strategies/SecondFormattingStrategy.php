<?php

namespace App\Strategies;

class SecondFormattingStrategy extends AbstractFormattingStrategy
{
    public function formatObject(object $object): array
    {
        $formattedObject = [];

        foreach ($object as $key => $value) {
            $formattedObject[] = "|$key|$value|";
        }

        return $formattedObject;
    }
}
