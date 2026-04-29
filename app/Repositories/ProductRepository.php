<?php

namespace App\Repositories;

use App\Models\Product;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Obtiene todos los productos.
     * @return Product[]
     */
    public function all(): array
    {
        return Product::all()->all();
    }

    /**
     * Crea un producto.
     * @param array $data
     * @return Product
     */
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    /**
     * Actualiza un producto existente
     * @param Product $product
     * @param array $data
     * @return Product
     */
    public function update(Product $product, array $data): Product
    {
        $product->update($data);
        return $product;
    }

    /**
     * Elimina un producto.
     * @param Product $product
     */
    public function delete(Product $product): void
    {
        $product->delete();
    }

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
