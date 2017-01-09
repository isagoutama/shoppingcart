<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk as Produk;
use Session;

use App\Http\Requests;
use App\Cart;
use Auth;
use DB;

class ProductController extends Controller
{
	public function index()
	{
		$produk = Produk::all();
    return view('shop.index',['produk'=>$produk]);
	}
	public function getAddToCart($id)
	{
		$obj = Produk::find($id);
		$auth = Auth::user()->username;
		$oldCart = DB::select("SELECT * FROM carts WHERE idproduk =".$id." && pembeli = '".$auth."'");

		// $updateCart = ;
		// return dd($obj,$oldCart);
		$getCart = Cart::where('idproduk', $id)->where('pembeli', $auth)->orderBy('id', 'desc')->get();

		if ($oldCart != null) {
			$upCart = Cart::find($oldCart[0]->id);
			$upCart->jumlahBarang += 1;
			$upCart->save();
			$jumlah = 0;
			return redirect('/');
		}
		else {
			$cart = new Cart();
			$cart->pembeli = Auth::user()->username;
			$cart->idproduk = $id;
			$cart->title = $obj->title;
			$cart->image = $obj->image;
			$cart->harga = $obj->harga;
			$cart->deskripsi = $obj->deskripsi;
			$cart->jumlahBarang = 1;
			$cart->save();
			return redirect('/');
		}
		return dd($obj,$oldCart,$auth);
	}
	public function getCart($my)
	{
		$getCart = DB::select("SELECT * FROM carts WHERE pembeli = '".$my."'");
	    $totalHarga = 0;
	    foreach($getCart as $data){
	      $totalHarga = $totalHarga + $data->harga*$data->jumlahBarang;
	    }
			// return dd($getCart);
			return view('shop.shopping-cart',['carts'=>$getCart, 'totalHarga'=>$totalHarga]);
	}
}
