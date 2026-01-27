<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function test_order_is_created_and_stock_is_updated()
    {
        $product = Product::factory()->create([
            'stock' => 10
        ]);

        $response = $this->postJson('/api/orders', [
            'items' => [
                ['product_id' => $product->id, 'qty' => 2]
            ]
        ]);

        $response->assertStatus(201);
        $this->assertEquals(8, $product->fresh()->stock);
    }
}
