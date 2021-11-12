<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;

class ProductService
{
    public function getUserProduct(User $user)
    {
        return Product::where('user_id', $user->id)->get();
    }
}
