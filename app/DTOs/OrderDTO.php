<?php

namespace App\DTOs;

use OpenApi\Attributes as OA;

#[OA\Schema(
    title: "Order",
    description: "Order resource for API responses",
    required: ["product_id", "quantity"]
)]
class OrderDTO
{
    #[OA\Property(property: "id", type: "integer", example: 1)]
    public int $id;

    #[OA\Property(property: "product_id", type: "integer", example: 10)]
    public int $product_id;

    #[OA\Property(property: "quantity", type: "integer", example: 5)]
    public int $quantity;

    #[OA\Property(property: "status", type: "string", enum: ["pending", "completed"], example: "pending")]
    public string $status;
}
