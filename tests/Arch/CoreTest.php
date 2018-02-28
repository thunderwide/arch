<?php

namespace Thunderwide\Arch\Test\Arch;

use Thunderwide\Arch\Test\TestCase;
use Thunderwide\Arch\Arch;
use Thunderwide\Arch\Traits\ArchCollections;
use Thunderwide\Arch\Test\Contracts\SampleInterface;
use Thunderwide\Arch\Test\Samples\UserNotification;

class CoreTest extends TestCase
{
    use ArchCollections;

    protected $instance = null;

    public function setUp()
    {
        parent::setUp();
        $this->instance = new Arch();
    }

    public function test_can()
    {
        $instance = Arch::app(new UserNotification(), SampleInterface::class);
        dd($instance);
    }
}