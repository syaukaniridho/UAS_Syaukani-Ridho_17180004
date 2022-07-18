<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    //
    public function showAll() {
    $dataDariModel = "Data Produk";
    return view('product.display', ["products" => 
    $dataDariModel]);
    }

}
