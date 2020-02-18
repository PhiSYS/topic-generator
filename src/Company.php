<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

abstract class Company
{
    private static ?Company $instance = null;

    public static function instance(): Company
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    abstract public function name(): string;
}
