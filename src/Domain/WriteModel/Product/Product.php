<?php

namespace M3commerce\Core\Domain\WriteModel\Product;

use M3commerce\Core\Domain\WriteModel\Content\ContentId;

class Product
{
    private ProductId $uid;

    private ContentId $name;

    private string $searchables;

    private array $tags;

    private array $variation;

    private array $attributes;

    private function __construct(
        private ProductId $productId,
        private ContentId $name,
    ) {

    }

    public static function create(
        ProductId $productId,
        ContentId $name,
    ): self
    {
        // TODO create from primitive types...
    }
}
