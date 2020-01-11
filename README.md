# api-wrapper-template
Template for a PHP API Wrapper

## Installation

```
git clone https://github.com/danielsundermeier/api-wrapper-template.git
cd api-wrapper-template
composer install
```

Replace "Dasumi\DummyNamespace" with your namespace in all files

## Usage

1. Change Api->getClient

src/Api.php
```php
protected function getClient() : Client
{
    return new Client([        
        'base_uri' => 'http://httpbin.org',
        'timeout'  => 2.0,
    ]);
}
```

2. Create Endpoints in src/Api
3. Set Endpoint

src/Api.php
```php 
protected function setEndpoints(Client $client) : void
{
    $this->example = new Example($client);
}
```

4. Make Call

```php
$api = new Api();
$response = $api->example->post();
```
