<?php
declare(strict_types=1);

namespace PcComponentes\TopicGenerator;

final class Topic
{
    public static function generate(
        Company $company,
        Service $service,
        string $version,
        string $type,
        string $resource,
        string $name
    ): string {
        return \implode(
            '.',
            [
                $company->name(),
                $service->name(),
                $version,
                $type,
                $resource,
                $name,
            ],
        );
    }
}
