<?php

namespace M3commerce\Core\Domain\WriteModel\Storefront;

use Doctrine\ORM\Mapping as ORM;
use M3commerce\Core\ValueObject\Price;
use M3commerce\Core\Domain\WriteModel\Product\ProductId;

class StorefrontProduct
{
    #[ORM\Id]
    private StorefrontId $storefrontId;

    #[ORM\Id]
    private ProductId $productId;

    #[ORM\Column(type: decimal)]
    private Price $price;
}

