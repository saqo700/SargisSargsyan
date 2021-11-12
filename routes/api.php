<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' =>  ['auth:api']], function () {
    Route::get('product-list', [ProductController::class, 'getApiProdlist']);

});

Route::get('test', function () {

//    $users = User::get();

    // select * from users limit 1;

//    $users = User::first();

    // last item

//    $users = User::latest()->first();

    // find by id

//    $users = User::find(5);

    // find by email

//    $users = User::where('email', 'sargis.sargsyan.y@tumo.org')->first();

    //$user->email

//    $users = User::where('email', 'sargis.sargsyan.y@tumo.org')->get();
    // chi ashxati

//    $users = User::where('id', '>', 4)->get();

//    $users = User::where('id', '>', 4)->count();

//      $users = User::where('id', '>', 4)->orderBy('id', 'desc')->get();



//      $users = User::where('id', '>', 4)->orderBy('id', 'asc')->get();


        //kam

//      $users = User::where('id', '>', 4)->orWhere('id', '<', 10)->get();

        //ev

//      $users = User::where('id', '>', 4)->Where('id', '<', 10)->get();

        //sql query

//        $query = User::where('id', '>', 4)->Where('id', '<', 10);


//        dd(
//            $query->toSql(),
//            $query->getBindings()
//        );




//      dd($users);


//        $product = Product::where('user_id', 9)->get();


//        $product = User::find(9)->products;

//          $users = User::has('products')->toSql();


//          $users = User::doesntHave('products')->get();

//          $users = User::whereHas('products', function ($query){
//              $query->where('id', '>', 4);
//          })->get();

    // N + 1
    // eager loading
    $user = User::with('products')->find(9);
    foreach ($user->products as $product) {
        dump($product->id);
    }


    //lazy loading
    $user = User::find(9);
    $user->load('products');
    foreach ($user->products as $product) {
        dump($product->id);
    }

});
