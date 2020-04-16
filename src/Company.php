<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

abstract class Company extends ClassAsKeyMultiton
{
    public static function instance(): Company
    {
        return parent::instance();
    }

    abstract public function name(): string;
}
