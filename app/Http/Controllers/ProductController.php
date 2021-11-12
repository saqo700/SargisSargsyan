<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarsRequest;
use App\Models\Category;
use App\Models\Product;

use App\Services\ProductService;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Cars;

class ProductController extends Controller
{
    public function postProduct(Request $request)
    {

        $data = $request->only('product', 'price', 'category_id');

        $data['user_id'] = Auth::user()->id;

        $user = Product::create($data);

        return redirect()->route('product-list');

    }
    public function postCars(CreateCarsRequest $request){

        $data = $request->only('brand','color','price');

        $data['user_id'] = Auth::user()->id;

        $user = Cars::create($data);

        return redirect()->route('carslist');

    }

    public function getProdlist()
    {
        return view('product-list', [
            'products' => (new ProductService())->getUserProduct(Auth::user()),
            'cars'=>Cars::where('user_id',Auth::user()->id)->get()
        ]);
    }

    public function getApiProdlist() {
        return response()->json(
            (new ProductService())->getUserProduct(Auth::user())
        );
    }
}
