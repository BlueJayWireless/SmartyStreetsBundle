## About ##
SmartyStreetsBundle is a bundle designed to encapsulate SmartyStreets REST API using
a repository/entity scheme for its data model. It is a continuous work in progress.


## Installation and configuration:

### Get the bundle

Add to composer.json

``` json
{
    "require": {
        ...
        "malwarebytes/smartystreetsbundle": "dev-master"
    }
    ...
}
```

To install, run `php composer.phar [update|install]`.

### Add SmartyStreetsBundle to your application kernel

``` php
<?php

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Malwarebytes\SmartyStreetsBundle\SmartyStreetsBundle(),
            // ...
        );
    }
```

### Set configuration

You will need to add your SmartyStreets authid and authtoken to your `parameters.yml`

``` yml
# app/config/parameters.yml
parameters:
    // ...
    smarty_streets_authid: <your SmartyStreets auth id>
    smarty_streets_authtoken: <your SmartyStreets auth token> 
    // ...
```
## Example Usage ##

``` php
$service = $this->get("malwarebytes_smarty_streets.street_address_service");

$address = new \Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressRequest();
$address->setStreet('10 Almaden');
$address->setCity('San Jose');
$address->setState('CA');

$streetAddressResponse = $service->verify($address);
```