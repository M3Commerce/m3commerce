<?php

namespace M3commerce\Core\ValueObject;

use JsonSerializable;

class Locale implements JsonSerializable
{
    const SEPARATOR = '-';

    private function __construct(
        private string $countryCode,
        private string $languageCode,
    ){}

    public function jsonSerialize(): array
    {
        return [
            'locale' => $this->__toString(),
            'countryCode' => $this->countryCode,
            'languageCode' => $this->languageCode,
        ];
    }

    public function __toString(): string
    {
        return join(self::SEPARATOR, [
            $this->countryCode,
            $this->languageCode,
        ]);
    }
}
