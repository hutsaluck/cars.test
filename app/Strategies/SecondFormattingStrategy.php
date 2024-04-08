<?php

namespace App\Strategies;

class SecondFormattingStrategy extends AbstractFormattingStrategy
{
    public function format(array $objects): array
    {
        $formattedText = '';

        foreach ($objects as $object) {
            foreach ($object as $key => $value) {
                $formattedText .= "|$key|$value|\n";
            }
            $formattedText .= "_______\n";
        }

        return [
            'name' => $this->name,
            'text' => $formattedText,
        ];
    }
}
