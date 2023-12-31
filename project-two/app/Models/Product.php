<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $image;
    private static $directory;
    private static $product;
    private static $imageName;
    private static $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image          = $request->file('image');
        self::$imageName      = self::$image->getClientOriginalName();
        self::$directory      = 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::saveBasicInfo(self::$product, $request, self::getImageUrl($request));
    }

    public static function updatePro($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

    public static function saveBasicInfo($product, $request, $imageUrl)
    {
        $product->name           = $request->name;
        $product->category       = $request->category;
        $product->brand          = $request->brand;
        $product->price          = $request->price;
        $product->description    = $request->description;
        $product->image          = $imageUrl;
        $product->save();
    }
}
