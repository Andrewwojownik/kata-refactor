<?php

namespace App\ItemsQualityStrategy;

use App\Contracts\ItemQualityStrategyInterface;
use App\Item;

class DefaultStrategy implements ItemQualityStrategyInterface
{
    public function updateQuality(Item $item): void
    {
        $item->quality -= 1;

        if ($item->sellInDays < 0) {
            $item->quality -= 1;
        }
    }

    public function fixQualityScope(Item $item): void
    {
        if ($item->quality > 50) {
            $item->quality = 50;
        }

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }

    public function decreaseDay(Item $item): void
    {
        $item->sellInDays -= 1;
    }
}