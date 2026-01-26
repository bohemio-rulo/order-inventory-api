<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product
    {
        return Product::findOrFail($id);
    }


    /**
     * @param Product $product
     * @param int $qty
     * @return void
     */
    public function decreaseStock(Product $product, int $qty): void
    {
        $product->decrement('stock', $qty);
    }
}
