<?php

namespace M3commerce\Core\ValueObject;

use JsonSerializable;

class Currency implements JsonSerializable
{
    private function __construct(
        private string $symbol,
        private string $isoCode,
        private string $name,
        private array $countryCodes = [],
    ){}

    public static function usd(): self
    {
        return new self(
            '$',
            'USD',
            'United States dollar',
            ['US']
        );
    }

    public static function eur(): self
    {
        return new self(
            '€',
            'EUR',
            'Euro',
            ['FR', 'GR']
        );
    }

    public static function fromMappedArray(array $map): self
    {
        return new self(
            $map['symbol'],
            $map['isoCode'],
            $map['name'],
            $map['countryCodes'] ?? [],
        );
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function jsonSerialize(): array
    {
        return [
            'symbol' => $this->symbol,
            'isoCode' => $this->isoCode,
            'name' => $this->name,
            'countryCodes' => $this->countryCodes,
        ];
    }
}
