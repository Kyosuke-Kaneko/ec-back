<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index () {
        $items = Product::all();
        // $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
        // $img_url ="/storage/images/fox.jpg";
        // $url = $url . $img_url;　MEMO:POSTするときにURLに追加する仕組みでいく（$request->url . $url）
        return response()->json([
            'message' => 'OK',
            'data' => $items,
        ], 200);
    }
    public function show(Product $product) {
        

    } 
 }
