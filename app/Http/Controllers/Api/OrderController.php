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
        content: new OA\JsonContent(ref: "#/components/schemas/Order") // reference to model
    )]
    #[OA\Response(
        response: 201,
        description: 'Order created',
        content: new OA\JsonContent(ref: "#/components/schemas/Order")
    )]
    public function store()
    {
        return response()->json([
            'message' => 'Order created'
        ], 201);
    }
}
