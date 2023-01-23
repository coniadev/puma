<?php

declare(strict_types=1);

namespace Conia\Quma\Migrations;

use Conia\Quma\Migrations\Environment;

/** @psalm-api */
interface MigrationInterface
{
    public function run(Environment $env): void;
}
