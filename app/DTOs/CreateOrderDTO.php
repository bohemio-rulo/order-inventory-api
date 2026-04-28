<?php

namespace App\DTOs;

use OpenApi\Attributes as OA;

#[OA\Schema(
    title: "CreateOrderDTO",
    description: "DTO para crear una orden",
    required: ["items"]
)]
class CreateOrderDTO
{
    /**
     * @var CreateOrderItemDTO[]
     */
    #[OA\Property(
        property: "items",
        type: "array",
        items: new OA\Items(ref: "#/components/schemas/CreateOrderItemDTO")
    )]
    public array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }
}
