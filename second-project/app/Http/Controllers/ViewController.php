<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data;
    private $product;

    public function index()
    {
        return view('test');
    }

    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = '017930406065';
        $this->data = [
            0 => [
                'name'      => 'Shakil ahmed',
                'email'     => 'email@gmail.com',
                'city'      => 'Lalmonirhat',
            ],
            1 => [
                'name'      => 'Maidul ahmed',
                'email'     => 'email@gmail.com',
                'city'      => 'Kawran Bazar',
            ],
            2 => [
                'name'      => 'Arman ahmed',
                'email'     => 'email@gmail.com',
                'city'      => 'Dhaka',
            ],
        ];

        return view('bitm', [
            'a'         => $this->city,
            'sakil'     => $this->mobile,
            'fahim'     => $this->data,
        ]);
    }
}
