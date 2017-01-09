@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
  @foreach ($produk->chunk(3) as $produkChunk)
    <div class="row">
      @foreach ($produkChunk as $produk)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ url('img/'.$produk->image) }}" alt="{{ $produk->title }}">
            <div class="caption">
              <h3>{{ $produk->title }}</h3>
              <p class="descript">{{ $produk->deskripsi }}</p>
              <div class="clearfix">
                <div class="pull-left price">
                  <sup>Rp.</sup>{{ $produk->harga }}
                </div>
                @if (Auth::check())
                  <a href="{{ url('add-to-cart/'.$produk->id) }}" class="btn btn-success pull-right" role="button">Keranjang Belanja</a>
                @else
                  <a href="/user/login" class="btn btn-success pull-right" role="button">Login</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

@endsection
