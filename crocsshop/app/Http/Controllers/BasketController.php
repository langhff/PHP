<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function cart() {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId'=> $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        return view('cart', [ 'order' => $order ]);
    }

    public function checkout() {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('main');
        }
        $order = Order::find($orderId);
        return view('checkout', [ 'order' => $order ]);
    }

    public function confirm (Request $request) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('main');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);

        if ($success) {
            session()->flash('success', 'Заказ принят в обработку');
        } else {
            session()->flash('warning', 'Произошла ошибка');
        }

        return redirect()->route('main');
    }

    public function cartAdd($productId, Request $request) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if(is_null($request->count)) {
            $count = 1;
        } else {
            $count = $request->count;
        }
        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count += $count;
        } else {
            $order->products()->attach($productId);
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count = $count;
        }
        $pivotRow->update();

        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }

        $order->updateProductsCount();
        return redirect()->route('cart');
    }

    public function cartRemove($productId, $all = null) {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::find($orderId);
            if ($all) {
                $order->products()->detach($productId);
            } else {
                if ($order->products->contains($productId)) {
                    $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                    if ($pivotRow->count < 2) {
                        $order->products()->detach($productId);
                    } else {
                        $pivotRow->count--;
                        $pivotRow->update();
                    }
                }
            }
            $order->updateProductsCount();
            return redirect()->route('cart');
        }
    }
}
