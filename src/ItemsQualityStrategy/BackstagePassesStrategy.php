<?php

namespace App\ItemsQualityStrategy;

use App\Contracts\ItemQualityStrategyInterface;
use App\Item;

class BackstagePassesStrategy extends DefaultStrategy implements ItemQualityStrategyInterface
{
    public function updateQuality(Item $item): void
    {
        $item->quality += 1;

        if ($item->sellInDays < 10) {
            $item->quality += 1;
        }
        if ($item->sellInDays < 5) {
            $item->quality += 1;
        }

        if ($item->sellInDays < 0) {
            $item->quality = 0;
        }
    }
}