<?php

namespace App\Repositories\Contracts;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function findById(int $id): Product;
    public function decreaseStock(Product $product, int $qty): void;
}
