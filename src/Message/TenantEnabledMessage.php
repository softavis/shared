<?php

declare(strict_types=1);

namespace Softavis\Shared\Message;

final readonly class TenantEnabledMessage
{
    public function __construct(
        private string $reference,
    ) {
    }

    public function getReference(): string
    {
        return $this->reference;
    }
}
