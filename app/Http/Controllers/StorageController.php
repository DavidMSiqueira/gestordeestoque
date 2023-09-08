<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index(){
        return view('storage.products');
        //$product = \App\Models\product::all();

        //return dd($product);
    }


    /**$nome = "David";

        return view('welcome', ['nome' => $nome]); */
}
