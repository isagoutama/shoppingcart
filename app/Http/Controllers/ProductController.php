<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk as Produk;

class ProductController extends Controller
{
	public function index() {

    	$produk = Produk::all();
    	return view('shop.index',['produk'=>$produk]);
	}
}
