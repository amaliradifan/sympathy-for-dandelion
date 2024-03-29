<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->filter(request(['search']))->paginate(9)
        ]);
    }
    public function indexold()
    {
        return view('products.index-old', [
            'products' => Product::All()
        ]);
    }

    public function category(Category $category)
    {
        return view('products.category', [
            "category" => $category,
            "products" => $category->products()->filter(request(['search']))->paginate(9)
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
