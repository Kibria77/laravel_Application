<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id'            => 1,
                'name'          => 'T-shart',
                'price'         => '2850',
                'descriiption'  => 'This is new Brand of T-shart',
                'img'           => asset('/img/t-2.jpg'),
            ],
            1 => [
                'id'            => 2,
                'name'          => 'Shari',
                'price'         => '2550',
                'descriiption'  => 'This is new Brand of Shari',
                'img'           => asset('/img/s-2.jpg'),
            ],
            2 => [
                'id'            => 3,
                'name'          => 'Brand T-shart',
                'price'         => '3150',
                'descriiption'  => 'This is new Brand of Smart T-shart',
                'img'           => asset('/img/t-1.jpg'),
            ],
            3 => [
                'id'            => 4,
                'name'          => 'Brand Shari',
                'price'         => '2750',
                'descriiption'  => 'This is new Brand of Tangail T-shart',
                'img'           => asset('/img/s-3.jpg'),
            ],
        ];
    }
}
