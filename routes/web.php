<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

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
    return view('index');
});

Route::get('/get-all-products', function() {
    ## get data from db
    # get categories
    $categories = Category::all();

    # get products for each category and make the structure of data
    $data = array();
    foreach($categories as $category){
        $categ_item = [
            "ID" => $category->id,
            "name" => $category->name,
            "products" => []
        ];
        $products = Product::where("category", $category->name)->get();
        foreach($products as $product){
            $prod_item = [
                "name" => $product->name,
                "img" => $product->img,
                "price" => $product->price
            ];
            $categ_item["products"][] = $prod_item;
        }
        $data[] = $categ_item;
    }

    # send data
    return $data;
});

Route::get('/add_category/{name}', function($name) {
    $category = new Category;
    # $category->name = request()->name;
    $category->name = $name;
    $category->save();
    return "تم إضافة الصنف '".$name."' بنجاح";
});

Route::get('/add_product/{name}/{img}/{price}/{category}', function($name, $img, $price, $category) {
    $valide = false;
    foreach(Category::all() as $item){
        if($category == $item->name) $valide=true;
    }
    if ($valide){
        $product = new Product;
        # $category->name = request()->name;
        $product->name = $name;
        $product->img = $img;
        $product->price = $price;
        $product->category = $category;
        $product->save();
        return "تم إضافةالمنتج ".$name." بنجاح";
    }else{
        return "الصنف ".$category."غير موجود";
    }
});
