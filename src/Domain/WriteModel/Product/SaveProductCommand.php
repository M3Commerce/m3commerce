<?php

namespace M3commerce\Core\Domain\WriteModel\Product;

use M3commerce\Core\Infrastructure\Command\Command;

class SaveProductCommand implements Command
{

    public function __construct(
        private ProductId $uid,
        private NonEmptyString $name,
    ){}

    public function jsonSerialize(): array
    {
        // TODO: Implement jsonSerialize() method.
    }
}
