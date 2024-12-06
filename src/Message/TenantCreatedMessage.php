<?php

declare(strict_types=1);

namespace Softavis\Shared\Message;

final readonly class TenantCreatedMessage
{
    public function __construct(
        private string $reference,
        private string $status,
        private string $name,
        private string $domain,
    ) {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }
}
