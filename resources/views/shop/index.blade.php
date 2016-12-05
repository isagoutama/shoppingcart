@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
<div class="grid">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ url('img/try.jpg') }}" alt="..." class="img-responsive">
      <div class="caption">
        <h3>Magnum Ice Cream</h3>
        <p class="descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <hr>
        <div class="pull-left price"><sup>Rp.</sup>15.000 </div>
        <div class="clearfix">
        <p><a href="#" class="btn btn-success pull-right" role="button">Keranjang Belanja</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
