<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_find_by_id_returns_a_product()
    {
        $product = Product::factory()->create();
        $repo = new ProductRepository();
        $result = $repo->findById($product->id);
        $this->assertTrue($result->is($product));
    }

    public function test_decrease_stock_actually_decrements_stock()
    {
        $product = Product::factory()->create(["stock" => 5]);
        $repo = new ProductRepository();
        $repo->decreaseStock($product, 2);
        $this->assertEquals(3, $product->fresh()->stock);
    }
}
