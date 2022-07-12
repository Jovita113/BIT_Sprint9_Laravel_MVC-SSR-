<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function getAllProducts()
    {
       return Product::all();
    }

    
}

?>