<?php

namespace App;

use App\Contracts\ItemQualityStrategyInterface;
use App\ItemsQualityStrategy\DefaultStrategy;

final class GildedRose
{
    /**
     * @var ItemsQualityConfig
     */
    private $config;

    public function __construct(ItemsQualityConfig $config)
    {
        $this->config = $config;
    }

    public function updateQuality(Item $item): void
    {
        /**
         * @var $strategy ItemQualityStrategyInterface
         */
        $strategy = new DefaultStrategy();
        $strategyClass = $this->config->getStrategyFromName($item->name);
        if ($strategyClass) {
            echo $strategyClass;
            $strategy = new $strategyClass();
        }

        $strategy->decreaseDay($item);
        $strategy->updateQuality($item);
        $strategy->fixQualityScope($item);
    }
}