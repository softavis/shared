<?php

declare(strict_types=1);

namespace Softavis\Shared\Tests\Unit\Message;

use PHPUnit\Framework\TestCase;
use Softavis\Shared\Message\EmailClientSentMessage;

final class EmailClientSentMessageTest extends TestCase
{
    public function testConstructorAndGettersWorks(): void
    {
        $email = 'test@test.com';

        $message = new EmailClientSentMessage(email: $email);

        $this->assertSame($email, $message->getEmail());
    }
}
