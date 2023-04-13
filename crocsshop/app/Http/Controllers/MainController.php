<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function main(Request $request) {
        Log::info($request->ip());
        return view('main');
    }

    public function catalog(Request $request) {
        $productsQuery = Product::query();
        if ($request->filled('sortBy')) {
            if ($request->sortBy == 'newest') {
                $productsQuery->orderByDesc('created_at');
            } elseif ($request->sortBy == 'lowToHigh') {
                $productsQuery->orderBy('price');
            } elseif ($request->sortBy == 'highToLow') {
                $productsQuery->orderByDesc('price');
            } else {
                $productsQuery->orderByDesc('created_at');
            }
        } else {
            $productsQuery->orderByDesc('created_at');
        }
        $products = $productsQuery->paginate(40 )->withPath('?sortBy=' . $request->sortBy);
        return view('catalog', [ 'products' => $products, 'sortBy' => $request->sortBy ]);
    }

    public function product($code) {
        $product = Product::where('code', $code)->first();
        return view('product', [ 'product' => $product ]);
    }

}
