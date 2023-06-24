<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StudentData extends Controller
{
    protected $fullName;
    private $products;

    public function info()
     {
         return view('student-info');
     }

     public function about()
     {
         $this->products = Product::getAllProduct();
         return view('about', ['products' => $this->products]);
     }

     public function contact()
     {
         return view('contact');
     }

     public function fullName(Request $request)
     {
         $this->fullName = $request->first_name.' '.$request->last_name;
         return view('test', ['result' => $this->fullName]);
         //return $request->all();
     }

     public function detail($rafa)
     {
         $this->products = Product::getAllProduct();
         foreach ($this->products as $item)
         {
             if ($item['id'] == $rafa)
             {
                 return view('detail', ['data' => $item]);
             }
         }
     }
}
