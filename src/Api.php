<?php

namespace Dasumi\DummyNamespace;

use Dasumi\DummyNamespace\Api\Example;
use Dasumi\BaseApiWrapper\Client;

class Api extends \Dasumi\BaseApiWrapper\Api
{
    protected function getClient() : Client
    {
        return new Client([
            'base_uri' => 'http://httpbin.org',
            'timeout'  => 2.0,
        ]);
    }

    protected function setEndpoints(Client $client) : void
    {
        $this->example = new Example($client);
    }
}