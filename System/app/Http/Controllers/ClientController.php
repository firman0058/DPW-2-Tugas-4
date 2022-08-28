<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.home', $data);
    }

    function showProduct(Produk $produk)
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.product', $data);
    }
}
