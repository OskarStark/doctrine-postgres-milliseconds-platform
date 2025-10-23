<?php

declare(strict_types=1);

/*
 * This file is part of oskarstark/doctrine-postgres-milliseconds-platform.
 *
 * (c) Oskar Stark <oskarstark@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OskarStark\Doctrine\Postgres\Platform\Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Platforms\PostgreSQLPlatform;

final class PostgreSQLMillisecondsPlatform extends PostgreSQLPlatform
{
    public function getDateTimeFormatString(): string
    {
        return \sprintf('%s.v', parent::getDateTimeFormatString());
    }
}
