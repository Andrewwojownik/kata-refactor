<?php

namespace App;

final class ItemsQualityConfig
{
    /**
     * @var array
     */
    private $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getStrategyFromName(string $name): ?string
    {
        return $this->config[$name] ?? null;
    }
}