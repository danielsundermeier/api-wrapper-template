<?php

namespace Dasumi\DummyNamespace;

use Dasumi\BaseApiWrapper\Client as BaseClient;
use Dasumi\DummyNamespace\Api\Example;
use Dasumi\DummyNamespace\Client;

class Api extends \Dasumi\BaseApiWrapper\Api
{
    protected function getClient() : BaseClient
    {
        return new Client([
            'base_uri' => 'http://httpbin.org',
            'timeout'  => 2.0,
        ]);
    }

    protected function setEndpoints(BaseClient $client) : void
    {
        $this->example = new Example($client);
    }
}