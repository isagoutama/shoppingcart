<?php

use Illuminate\Database\Seeder;
use App\produk as Produk;
Use App\User;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $produk = new Produk(['title'=>'Naruto Shipuden',
                            'image'=>'Naruto.png',
                            'harga'=>'9500',
                            'deskripsi'=>'Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Vivamus congue velit quis nibh lacinia iaculis.
                            Praesent at nibh at enim mattis pulvinar.']);
      $produk->save();
    }
}
