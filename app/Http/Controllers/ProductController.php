<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(StoreProductRequest $request)
    {
        Product::query()->create($request->validated());
        return redirect()->route("product.index");
    }

    public function create()
    {
        return view("products.create");
    }

    public function index()
    {
        $products =Product::query()->get();

        return view('products.index',compact("products"));
    }
}
