<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationCtr;
use App\Http\Controllers\Admin\ProductCtr;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $product = DB::table('tbl_product as P')
                ->select('P.*', 'C.*')
                ->leftJoin('tbl_category AS C', 'C.id', '=', 'P.category_id')
                ->get();
    return view('main',['product' => $product]);
});

Route::get('auth/google', [AuthenticationCtr::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [AuthenticationCtr::class, 'handleGoogleCallback']);

Route::get('admin/product', [ProductCtr::class, 'index']);
Route::post('admin/addProduct', [ProductCtr::class, 'addProduct']);
Route::post('admin/updateProduct', [App\Http\Controllers\Admin\ProductCtr::class, 'updateProduct']);
Route::get('admin/getAllProducts', [ProductCtr::class, 'getAllProducts']);
Route::get('admin/getOneProduct/{id}', [ProductCtr::class, 'getOneProduct']);
Route::delete('admin/deleteProduct/{id}', [ProductCtr::class, 'deleteProduct']);
