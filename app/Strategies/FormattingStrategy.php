<?php
namespace App\Strategies;

interface FormattingStrategy
{
    public function format(array $objects): array;
}
