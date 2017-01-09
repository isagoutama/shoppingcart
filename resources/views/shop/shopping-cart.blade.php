@extends('layouts.master')
@section('title')
  Keranjang Belanja
@endsection
@section('content')
  @if ($carts != null)
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
          @foreach ($carts as $cart)
            <li class="list-group-item">
              <span class="badge">{{ $cart->jumlahBarang }}</span>
              <strong>{{ $cart->title }}</strong>
              <span class="label label-success">Rp.{{ $cart->harga * $cart->jumlahBarang }}</span>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Reduce by 1</a></li>
                  <li><a href="#">Reduce All</a></li>
                </ul>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total: Rp.{{ $totalHarga }}</strong>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <button class="btn btn-success" type="button">Checkout</button>
      </div>
    </div>
  @else
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Keranjang Belanja Kosong</strong>
      </div>
    </div>
  @endif
@endsection
