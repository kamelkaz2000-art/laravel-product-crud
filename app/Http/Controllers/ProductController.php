<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

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

    public function index(Request $request)
    {
        $search =$request->input('search');
        $products =Product::query()->when($search,function ($query, $sesrch) {return $query->where('name','like','%'.$sesrch.'%'); })
        ->paginate(5)->withQueryString();

        return view('products.index',compact("products"));
    }
}