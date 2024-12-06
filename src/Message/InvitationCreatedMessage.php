<?php

declare(strict_types=1);

namespace Softavis\Shared\Message;

final readonly class InvitationCreatedMessage
{
    public function __construct(
        private string $reference,
        private string $email,
    ) {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
