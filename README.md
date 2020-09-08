# Topic Generator

This is a helper that standardizes topic generation in messages (commands and events).

## Installation

1) Install via [composer](https://getcomposer.org/)

    ```shell script
    composer require pccomponentes/topic-generator
    ```

## Usage

At least two classes are required: `Company` and `Service`.

- Company

    ```php
    <?php
    declare(strict_types=1);
    
    class PcComponentes extends \PcComponentes\TopicGenerator\Company
    {
        private const COMPANY_NAME = 'pccomponentes';
    
        public function name(): string
        {
            return self::COMPANY_NAME;
        }
    }
    ```

- Service

    ```php
    <?php
    declare(strict_types=1);
    
    class Picking extends \PcComponentes\TopicGenerator\Service
    {
        private const SERVICE_NAME = 'picking';
    
        public function name(): string
        {
            return self::SERVICE_NAME;
        }
    }
    ```

Then the messages would be generated in this way:

```php
<?php
declare(strict_types=1);

$version = '1';
$type = 'command';
$resource = 'parcel';
$name = 'register';

$topic = \PcComponentes\TopicGenerator\Topic::generate(
    PcComponentes::instance(),
    Picking::instance(),
    $version,
    $type,
    $resource,
    $name
);

echo $topic;
```

The result would be this:

    pccomponentes.picking.1.command.parcel.register
