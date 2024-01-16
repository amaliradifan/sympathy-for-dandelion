<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::All()
        ]);
    }
    public function indexold()
    {
        return view('products.index-old', [
            'products' => Product::All()
        ]);
    }

    public function show(Product $produk)
    {
        return view('products.product', [
            'product' => $produk
        ]);
    }
    public function showold(Product $produk)
    {
        return view('products.product', [
            'product' => $produk
        ]);
    }
}
