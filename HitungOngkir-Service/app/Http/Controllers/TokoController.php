<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TokoController extends Controller
{
    public function getToko()
    {
        $response = Http::get('http://localhost:3001/api/toko');
        $toko = $response->json();

        return view('/cek-toko', ['toko' => $toko]);
    }
}
