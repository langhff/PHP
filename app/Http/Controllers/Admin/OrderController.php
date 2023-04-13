<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{
    public function orders() {
        $orders = Order::where('status', 1)->get();
        return view('admin.orders.index', [ 'orders' => $orders ]);
    }

    public function show(Order $order) {
        return view('admin.orders.show', [ 'order' => $order ]);
    }
}
