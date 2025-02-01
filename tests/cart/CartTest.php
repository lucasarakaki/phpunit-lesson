<?php
namespace Tests\cart;

// Dependências

use App\exceptions\CartQuantityException;
use App\libraries\Cart;
use App\libraries\Product;
use PHPUnit\Framework\TestCase;

final class CartTest extends TestCase
{
    private readonly Cart $cart;

    public function setup(): void
    {
        $this->cart = new Cart;
    }

    /**
     * Test if cart is empty
     * @return void
     */
    public function testIfCartIsEmpty(): void
    {
        $this->assertEmpty($this->cart->getProducts());
    }

    /**
     * Test if cart is not empty
     * @return void
     */
    public function testIfCartIsNotEmpty(): void
    {
        $this->cart->addProduct(new Product);

        $this->assertNotEmpty($this->cart->getProducts());
    }

    /**
     * Test catch exception if cart have more than 2 products
     * @return void
     */
    public function testCatchExceptionIfCartHaveMoreThan2Products(): void
    {
        $this->expectException(CartQuantityException::class);

        $product  = new Product;
        $product2 = new Product;
        $product3 = new Product;

        $this->cart->addProduct($product);
        $this->cart->addProduct($product2);
        $this->cart->addProduct($product3);
    }
}
