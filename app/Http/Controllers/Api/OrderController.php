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
    private \App\Services\Contracts\OrderServiceInterface $orderService;

    public function __construct(\App\Services\Contracts\OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(\App\Http\Requests\OrderRequest $request)
    {
        $orderDto = $request->toDTO();
        // Ahora utiliza el servicio por interface
        // $order = $this->orderService->create($orderDto);
        // return new \\App\\Http\\Resources\\OrderResource($order);

        return response()->json([
            'message' => 'Order created (falta implementar lógica de persistencia en Service)',
            'dto' => $orderDto
        ], 201);
    }
}
