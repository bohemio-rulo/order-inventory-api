<?php

namespace App\DTOs;

use OpenApi\Attributes as OA;

#[OA\Schema(
    title: "CreateOrderItemDTO",
    description: "Elemento individual para crear una orden",
    required: ["product_id", "qty"]
)]
class CreateOrderItemDTO
{
    #[OA\Property(property: "product_id", type: "integer", example: 1)]
    public int $product_id;

    #[OA\Property(property: "qty", type: "integer", example: 2)]
    public int $qty;

    public function __construct(int $product_id, int $qty)
    {
        $this->product_id = $product_id;
        $this->qty = $qty;
    }
}
