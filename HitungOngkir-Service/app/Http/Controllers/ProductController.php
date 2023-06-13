<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function getProduct()
    {
        $response = Http::get('http://localhost:3000/api/product');
        $product = $response->json();

        return view('/cek-product', ['product' => $product]);
    }
}
