<?php

namespace M3commerce\Core\Domain\WriteModel\Product;

class Product
{
    private string $uid;

    private string $name;

    private float $price;

    private string $searchables;

    private array $tags;

    private array $variation;

    private array $attributes;

    public static function create(): self
    {
        // TODO create from primitive types...
    }
}
