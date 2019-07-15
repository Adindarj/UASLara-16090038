@extends('front-and.template.default')
@section('main')

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{asset('images/'.$produk->foto)}}" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$produk->nama_produk}}</h2>
            <p>{{$produk->deskripsi}}</p>
            <p><strong class="text-primary h4">Rp.{{number_format($produk->harga)}}</strong></p>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
            </div>
            </div>
            <p><a href="{{route('userpesan', $produk->id)}}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Pesan</a></p>

          </div>
        </div>
      </div>
    </div>
    @endsection