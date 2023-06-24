<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $product;
    protected $products;

    public function index()
    {
        return view('product.product');
    }

    public function uploadProduct(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('massege', 'Product Info save Successfully');
    }

    public function manegeProduct()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('product.manege-product', ['products' => $this->products]);
    }

    public function editProduct($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }

    public function updateProduct(Request $request, $id)
    {
       Product::updatePro($request, $id);
       return redirect('/manege-product')->with('amassege', 'Product info Update successfullly');
    }
}
