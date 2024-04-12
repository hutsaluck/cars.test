<?php
namespace App;

use App\Strategies\FormattingStrategy;

class Context
{
    protected $strategy;

    public function __construct(FormattingStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(array $objects): array
    {
        return $this->strategy->formatObjects($objects);
    }
}
