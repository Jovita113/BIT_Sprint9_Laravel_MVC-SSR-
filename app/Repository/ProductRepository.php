<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function getAllProducts()
    {
       return Product::all();
    }

    public function getSingleProduct($id)
    {

        return  Product::find($id);

    }

    public function createProduct(array $data)
    {

        $product = new Product();
        $product->picture = $data['picture'];
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->description = $data['description'];


        $product->save();

    }


}



?>