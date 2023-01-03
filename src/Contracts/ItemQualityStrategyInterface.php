<?php

namespace App\Contracts;

use App\Item;

interface ItemQualityStrategyInterface
{
    public function updateQuality(Item $item): void;

    public function fixQualityScope(Item $item): void;

    public function decreaseDay(Item $item): void;
}