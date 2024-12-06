<?php

declare(strict_types=1);

namespace Softavis\Shared\Tests\Unit\Message;

use PHPUnit\Framework\TestCase;
use Softavis\Shared\Message\TenantEnabledMessage;

final class TenantEnabledMessageTest extends TestCase
{
    public function testSettersAndGetters(): void
    {
        $reference = 'reference';

        $message = new TenantEnabledMessage(reference: $reference);

        $this->assertSame($reference, $message->getReference());
    }
}
