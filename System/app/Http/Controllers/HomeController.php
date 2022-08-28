<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showBeranda(){
        return view('Admin.beranda');
    }

    function showProduk(){
        return view('Admin.produk');
    }

    function showKategori(){
        return view('Admin.kategori');
    }
}
