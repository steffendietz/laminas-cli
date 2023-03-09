<?php

declare(strict_types=1);

namespace LaminasTest\Cli\TestAsset\Module;

use Laminas\EventManager\EventInterface;
use Laminas\ModuleManager\Feature\BootstrapListenerInterface;

class BootstrappableModule implements BootstrapListenerInterface
{
    private bool $bootstrapped = false;

    public function onBootstrap(EventInterface $e)
    {
        $this->bootstrapped = true;
    }

    public function wasBootstrapped(): bool
    {
        return $this->bootstrapped;
    }
}
