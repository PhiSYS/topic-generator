<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

abstract class Service
{
    private static Service $instance;

    public static function instance(): Service
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    abstract public function name(): string;
}
