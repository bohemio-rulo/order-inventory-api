<?php

namespace App\Services;

use App\Jobs\SyncOrderToErpJob;
use App\Models\Order;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

use App\Services\Contracts\OrderServiceInterface;
use App\DTOs\CreateOrderDTO;

class OrderService implements OrderServiceInterface
{
    /**
     * @param ProductRepository $productRepo
     */
    public function __construct(
        private ProductRepositoryInterface $productRepo
    ) {}


    public function create(CreateOrderDTO $dto): Order
    {
        // Aún sin implementación real; así se acepta el DTO
        throw new \RuntimeException('No implementado: crear la orden usando el DTO limpio');
    }
}
