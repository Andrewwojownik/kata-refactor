<?php

namespace App\ItemsQualityStrategy;

use App\Contracts\ItemQualityStrategyInterface;
use App\Item;

class AgedBrieStrategy extends DefaultStrategy implements ItemQualityStrategyInterface
{
    public function updateQuality(Item $item): void
    {
        $item->quality += 1;

        if ($item->sellInDays < 0) {
            $item->quality += 1;
        }
    }
}