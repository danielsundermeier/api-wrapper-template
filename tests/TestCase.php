<?php

namespace Dasumi\DummyNamespace\Tests;

use Dasumi\DummyNamespace\Api;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    protected $api;

    protected function setUp() : void
    {
        $this->api = new Api();
    }
}

?>