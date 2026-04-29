<?php

namespace App\Repositories\Contracts;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all(): array;
    public function create(array $data): Product;
    public function update(Product $product, array $data): Product;
    public function delete(Product $product): void;
    public function findById(int $id): Product;
    public function decreaseStock(Product $product, int $qty): void;
}
