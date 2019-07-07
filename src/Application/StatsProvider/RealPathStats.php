<?php

declare(strict_types=1);

namespace PabloK\CacheStatsBundle\Application\StatsProvider;

use PabloK\CacheStatsBundle\Application\Size;

final class RealPathStats
{
    /** @var bool */
    private $enabled;
    /** @var Size */
    private $size;
    /** @var Size */
    private $usage;

    public function __construct(
        bool $enabled,
        Size $size,
        Size $usage
    ) {
        $this->enabled = $enabled;
        $this->size = $size;
        $this->usage = $usage;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

    public function size(): Size
    {
        return $this->size;
    }

    public function usage(): Size
    {
        return $this->usage;
    }
}
