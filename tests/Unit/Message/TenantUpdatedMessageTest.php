<?php

declare(strict_types=1);

namespace Softavis\Shared\Tests\Unit\Message;

use PHPUnit\Framework\TestCase;
use Softavis\Shared\Message\TenantUpdatedMessage;

final class TenantUpdatedMessageTest extends TestCase
{
    public function testSettersAndGetters(): void
    {
        $reference = 'reference';
        $status = 'status';
        $name = 'name';
        $domain = 'domain.example.com';

        $message = new TenantUpdatedMessage(
            reference: $reference,
            status: $status,
            name: $name,
            domain: $domain,
        );

        $this->assertSame($reference, $message->getReference());
        $this->assertSame($status, $message->getStatus());
        $this->assertSame($name, $message->getName());
        $this->assertSame($domain, $message->getDomain());
    }
}
