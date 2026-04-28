<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use OpenApi\Attributes as OA;

#[OA\Info(title: "Api Order", version: "0.1")]
class OrderController extends Controller
{
    #[OA\Post(
        path: '/api/orders',
        summary: 'Create order',
        tags: ['Orders']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\JsonContent(ref: "#/components/schemas/OrderDTO") // ahora referencia al DTO
    )]
    #[OA\Response(
        response: 201,
        description: 'Order created',
        content: new OA\JsonContent(ref: "#/components/schemas/OrderDTO")
    )]
    public function store()
    {
        // Ejemplo: devuelve un recurso OrderResource (en una app real aquí se crearía la orden)
        // return new \\App\\Http\\Resources\\OrderResource($order);
        return response()->json([
            'message' => 'Order created'
        ], 201);
    }
}
