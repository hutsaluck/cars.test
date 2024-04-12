<?php
namespace App\Strategies;

interface FormattingStrategy
{
    public function formatObject(object $objects): array;
}
