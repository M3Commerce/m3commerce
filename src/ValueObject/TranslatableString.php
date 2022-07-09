<?php

namespace M3commerce\Core\ValueObject;

use JetBrains\PhpStorm\Internal\TentativeType;

class TranslatableString implements \JsonSerializable
{
    // TODO support multiple languages for a string,
    // any of them could be the original
    private function __construct(
        private string $lang,
        private string $trans,
    ){}

    public function jsonSerialize(): mixed {
        // TODO: Implement jsonSerialize() method.
    }
}
