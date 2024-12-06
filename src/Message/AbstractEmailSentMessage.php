<?php

declare(strict_types=1);

namespace Softavis\Shared\Message;

abstract readonly class AbstractEmailSentMessage
{
    public function __construct(private string $email, private ?string $name = null)
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
