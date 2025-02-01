<?php
namespace App\libraries;

use App\exceptions\CartQuantityException;

class Cart
{
    private array $products = [];

    public function addProduct(Product $product)
    {
        if (count($this->products) === 2) {
            throw new CartQuantityException('Cart can not have more than 2 products');
        }

        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
