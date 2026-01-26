<?php

namespace App\Services;

use App\Jobs\SyncOrderToErpJob;
use App\Models\Order;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;

class OrderService
{
    /**
     * @param ProductRepository $productRepo
     */
    public function __construct(
        private ProductRepository $productRepo
    ) {}


    public function create(array $data): Order
    {
        DB::transaction(function () use ($data, &$order) {
            // validate stock
            // create order
            // disconnect stock
        });

        SyncOrderToErpJob::dispatch($order);

        return $order;
    }
}
