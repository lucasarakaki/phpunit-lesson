<?php
namespace Tests\product;

// Dependências
use App\libraries\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private readonly Product $product;

    public function setup(): void
    {
        $this->product = new Product;
    }

    /**
     * Test if product is string
     */
    public function testIfProductIsString()
    {
        $this->product->setName('Keyboard');

        $this->assertIsString($this->product->getName());
    }
}
