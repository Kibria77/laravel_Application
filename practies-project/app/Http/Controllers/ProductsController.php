<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $products;

    public function getAllProductInfo()
    {
        $this->products = Product::getAllProductsDetails();
        return view('product', ['products' => $this->products]);
    }
}
