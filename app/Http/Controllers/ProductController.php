<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Produk::All()
        ]);
    }
    public function indexold()
    {
        return view('products.index-old', [
            'products' => Produk::All()
        ]);
    }

    public function show(Produk $produk)
    {
        return view('products.product', [
            'product' => $produk
        ]);
    }
}
