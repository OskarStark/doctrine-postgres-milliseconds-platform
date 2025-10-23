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

namespace OskarStark\Doctrine\Postgres\Platform\Tests\Unit\Doctrine\DBAL\Platforms;

use OskarStark\Doctrine\Postgres\Platform\Doctrine\DBAL\Platforms\PostgreSQLMillisecondsPlatform;
use PHPUnit\Framework\TestCase;

final class PostgreSQLMillisecondsPlatformTest extends TestCase
{
    /**
     * @test
     */
    public function getDateTimeFormatString(): void
    {
        $platform = new PostgreSQLMillisecondsPlatform();

        self::assertSame(
            'Y-m-d H:i:s.v',
            $platform->getDateTimeFormatString(),
        );
    }
}
