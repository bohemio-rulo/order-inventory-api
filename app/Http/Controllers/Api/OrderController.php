<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use OpenApi\Attributes as OA;

#[OA\Info(title: "My API", version: "0.1")]
class OrderController extends Controller
{
    #[OA\Post(
        path: '/api/orders',
        summary: 'Create an order',
        tags: ['Orders']
    )]
    #[OA\Response(
        response: 201,
        description: 'Order created'
    )]
    public function store()
    {
        return response()->json([
            'message' => 'Order created'
        ], 201);
    }
}
