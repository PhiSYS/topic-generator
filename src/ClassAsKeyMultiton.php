<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

abstract class ClassAsKeyMultiton
{
    private static array $instances = [];

    protected static function instance(): self
    {
        $key = static::class;
        if (false === \array_key_exists($key, self::$instances)) {
            static::$instances[$key] = new static();
        }

        return static::$instances[$key];
    }
}
