<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

# API

Route::get('/city/{province_id}', function($province_id) {
	return $cities = DB::table('regencies')->where('province_id', $province_id)->pluck('name', 'id');
});

Route::get('/subcategory/{category_id}', function($category_id) {
	return $cities = DB::table('sub_categories')->where('category_id', $category_id)->pluck('name', 'id');
});

# new API
Route::get('/categories', function(){
	$categories = DB::table('categories')->select('name', 'id')->get();
	return response()->json($categories);
});

Route::get('/subcategories/{category_id}', function($category_id){
	$subcategories = DB::table('sub_categories')->select('name', 'id')->where('category_id', $category_id)->get();
	return response()->json($subcategories);
});

Route::get('/books', function(){
	$books = \App\Product::with('productImages')->paginate(16);
	return response()->json($books);
});

