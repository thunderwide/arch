<?php

namespace Thunderwide\Arch\Test\Samples;

use Thunderwide\Arch\Test\Contracts\SampleInterface as NotificationContract;

class Notification implements NotificationContract
{
    public function send()
    {
        echo 'Interface\'s method triggered. Sending now...';
    }
}