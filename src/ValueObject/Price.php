<?php

namespace M3commerce\Core\ValueObject;


use JsonSerializable;

class Price implements JsonSerializable
{
    private function __construct(
        private readonly float $value,
        private readonly Currency $currency,
    ){}

    public function jsonSerialize(): array
    {
        return [
            'value' => $this->value,
            'currency' => $this->currency,
            'currencyCode' => $this->currency->getIsoCode(),
            'currencySymbol' => $this->currency->getSymbol(),
        ];
    }
}
