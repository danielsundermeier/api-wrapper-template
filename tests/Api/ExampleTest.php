<?php

namespace Dasumi\DummyNamespace\Tests;

use Dasumi\DummyNamespace\Api;

class ExampleTest extends \Dasumi\DummyNamespace\Tests\TestCase
{
    protected $api;

    /**
     * @test
     */
    public function it_works()
    {
        $data = $this->api->example->post();
        $this->assertEquals('https://httpbin.org/post', $data['url']);
    }

}