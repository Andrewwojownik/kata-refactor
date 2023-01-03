<?php

namespace App\ItemsQualityStrategy;

use App\Contracts\ItemQualityStrategyInterface;
use App\Item;

class SulfurasStrategy implements ItemQualityStrategyInterface
{
    public function updateQuality(Item $item): void
    {
        $item->quality = 80;
    }

    public function fixQualityScope(Item $item): void
    {

    }

    public function decreaseDay(Item $item): void
    {

    }
}