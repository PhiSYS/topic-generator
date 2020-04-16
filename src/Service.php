<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

abstract class Service extends ClassAsKeyMultiton
{
    public static function instance(): Service
    {
        return parent::instance();
    }

    abstract public function name(): string;
}
