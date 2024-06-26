<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Context;
use App\Strategies\FirstFormattingStrategy;
use App\Strategies\SecondFormattingStrategy;

class FormatController extends Controller
{
    public function format()
    {
        $objects = [
            (object)[
                'brandName' => 'Ford',
                'model' => 'Mustang',
                'modelDetails' => 'GT rest 2',
                'modelYear' => '2014',
                'productionYear' => '2013',
                'color' => 'Oxford White',
            ],
            (object)[
                'brandName' => 'BMW',
                'model' => '520i',
                'modelDetails' => 'rest',
                'modelYear' => '2001',
                'productionYear' => '2001',
                'color' => 'Green',
            ],
            (object)[
                'brandName' => 'Toyota',
                'model' => 'Camry',
                'modelDetails' => 'LE',
                'modelYear' => '2018',
                'productionYear' => '2017',
                'color' => 'Black',
            ],
            (object)[
                'brandName' => 'Honda',
                'model' => 'Civic',
                'modelDetails' => 'EX',
                'modelYear' => '2019',
                'productionYear' => '2018',
                'color' => 'Silver',
            ],
        ];

        $firstStrategyContext = new Context(new FirstFormattingStrategy());
        $firstFormatted = $firstStrategyContext->executeStrategy($objects);
        echo '<pre>';
        var_dump($firstFormatted);

        $secondStrategyContext = new Context(new SecondFormattingStrategy());
        $secondFormatted = $secondStrategyContext->executeStrategy($objects);
        var_dump($secondFormatted);
        echo '</pre>';
    }
}
