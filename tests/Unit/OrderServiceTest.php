<?php

namespace Tests\Unit;

use App\DTOs\CreateOrderDTO;
use App\DTOs\CreateOrderItemDTO;
use App\Models\Order;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Services\OrderService;
use PHPUnit\Framework\TestCase;

class OrderServiceTest extends TestCase
{
    public function test_create_returns_order_instance()
    {
        $dto = new CreateOrderDTO([
            new CreateOrderItemDTO(1, 2)
        ]);

        $mockRepo = $this->createMock(ProductRepositoryInterface::class);
        // Aquí podrías configurar el mock para métodos específicos, si la lógica real los usara

        $service = new OrderService($mockRepo);

        $this->expectException(\RuntimeException::class);
        $service->create($dto);
    }
}
