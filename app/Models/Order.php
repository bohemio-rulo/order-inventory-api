<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OpenApi\Attributes as OA;

#[OA\Schema(
    title: "Order",
    description: "Model to Order",
    required: ["product_id", "quantity"]
)]
class Order extends Model
{
    #[OA\Property(property: "id", type: "integer", readOnly: true, example: 1)]
    private $id;

    #[OA\Property(property: "product_id", type: "integer", description: "ID product", example: 10)]
    protected $product_id;

    #[OA\Property(property: "quantity", type: "integer", example: 5)]
    protected $quantity;

    #[OA\Property(property: "status", type: "string", enum: ["pending", "completed"], example: "pending")]
    protected $status;
}
