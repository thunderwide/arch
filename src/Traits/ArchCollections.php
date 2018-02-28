<?php

namespace Thunderwide\Arch\Traits;

use Thunderwide\Arch\Arch;

trait ArchCollections
{
    public function app($concrete, $contract)
    {
        $instance = Arch::getInstance();
        return $instance::make($contract);
    }
}