<?php

declare(strict_types=1);

namespace Softavis\Shared\Tests\Unit\Message;

use Softavis\Shared\Message\EmailTenantSentMessage;
use PHPUnit\Framework\TestCase;

final class EmailTenantSentMessageTest extends TestCase
{
    public function testConstructorWithNullableNameWorks(): void
    {
        $email = 'test@test.com';

        $message = new EmailTenantSentMessage(email: $email);

        $this->assertSame($email, $message->getEmail());
        $this->assertNull($message->getName());
    }

    public function testConstructorWithNameWorks(): void
    {
        $email = 'test@test.com';
        $name = 'Test Name';

        $message = new EmailTenantSentMessage(email: $email, name: $name);

        $this->assertSame($email, $message->getEmail());
        $this->assertSame($name, $message->getName());
    }
}
