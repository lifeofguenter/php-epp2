<?php

namespace AfriCC\Tests\EPP\Extension\FRED\Create;

use AfriCC\EPP\Extension\FRED\Create\Nsset;
use PHPUnit\Framework\TestCase;

class NssetCreateTest extends TestCase
{
    public function testFredCreateNssetFrame()
    {
        $frame = new Nsset();
        $frame->setId('NID-ANSSET');
        echo (string) $frame;
    }
}
