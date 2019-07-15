@extends('front-and.template.default')
@section('main')

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">All Product</h2>
          </div>
        </div>
        <div class="row">

        @foreach($produk as $produk)
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="{{route('userdetail', $produk->id)}}" class="product-item md-height bg-gray d-block">
              <img src="{{asset('images/'. $produk->foto)}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="">{{$produk->nama_produk}}</a></h2>
            <strong class="item-price">Rp. {{number_format($produk->harga)}}</strong>
          </div>

         @endforeach


          
        </div>
      </div>
    </div>
@endsection