<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProductsDetails()
    {
        return [
            0 => [
                'name'          => 't-Shirt',
                'brand'         => 'Men Fession',
                'price'         => '3200',
                'description'   => 'Find the lowest price for Shopify T Shirt Store today! Now on sale at GigaPromo.
                                    GigaPromo is the website to compare Shopify T Shirt Store. Search and save now!
                                    Cheap Prices. Save Online. The Best Price. Simple Search. Large Selection. Compare Online.
                                    Full Offer. Compare Simply. Always Sale.',
                'img'           => asset('/img/t-shirt-1.jpg'),
            ],
            1 => [
                'name'          => 'Smart Watch',
                'brand'         => 'Men & Women Fession',
                'price'         => '1600',
                'description'   => 'Find the lowest price for Shopify T Shirt Store today! Now on sale at GigaPromo.
                                    GigaPromo is the website to compare Shopify T Shirt Store. Search and save now!
                                    Cheap Prices. Save Online. The Best Price. Simple Search. Large Selection. Compare Online.
                                    Full Offer. Compare Simply. Always Sale.',
                'img'           => asset('/img/watch-2.jpg'),
            ],
            2 => [
                'name'          => 'Digital Computer',
                'brand'         => 'Electronics Products',
                'price'         => '1780',
                'description'   => 'Find the lowest price for Shopify T Shirt Store today! Now on sale at GigaPromo.
                                    GigaPromo is the website to compare Shopify T Shirt Store. Search and save now!
                                    Cheap Prices. Save Online. The Best Price. Simple Search. Large Selection. Compare Online.
                                    Full Offer. Compare Simply. Always Sale.',
                'img'           => asset('/img/com-1.jpg'),
            ],
            3 => [
                'name'          => 'Smart Show',
                'brand'         => 'Men & Women Fession',
                'price'         => '2250',
                'description'   => 'Find the lowest price for Shopify T Shirt Store today! Now on sale at GigaPromo.
                                    GigaPromo is the website to compare Shopify T Shirt Store. Search and save now!
                                    Cheap Prices. Save Online. The Best Price. Simple Search. Large Selection. Compare Online.
                                    Full Offer. Compare Simply. Always Sale.',
                'img'           => asset('/img/show-3.jpg'),
            ],
        ];
    }
}
