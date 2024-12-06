<?php

declare(strict_types=1);

namespace Softavis\Shared\Tests\Unit\Message;

use PHPUnit\Framework\TestCase;
use Softavis\Shared\Message\InvitationCreatedMessage;

final class InvitationCreatedMessageTest extends TestCase
{
    public function testInvitationCreatedMessage(): void
    {
        $reference = 'reference';
        $email = 'email@example.com';

        $message = new InvitationCreatedMessage(
            reference: $reference,
            email: $email,
        );

        $this->assertSame($reference, $message->getReference());
        $this->assertSame($email, $message->getEmail());
    }
}