<?php

namespace App;

final class Item
{
    public const NAME_AGED_BRIE = 'Aged Brie';
    public const NAME_SULFURAS = 'Sulfuras, Hand of Ragnaros';
    public const NAME_BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';

    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $sellInDays;
    /**
     * @var int
     */
    public $quality;

    function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellInDays = $sellIn;
        $this->quality = $quality;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sellInDays}, {$this->quality}";
    }
}