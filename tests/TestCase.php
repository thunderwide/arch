<?php

namespace Thunderwide\Arch\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp ()
    {
        parent::setUp();
    }
}