@extends('front-and.template.default')
@section('main')
<div class="site-section">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12">
            
          </div> -->
          <div class="col-md-12">

          	<h2 class="h3 mb-3 text-black text-center">Formulir Pembelian</h2>

            <form action="{{route('userpesansubmit')}}" method="post">
              @csrf
              <div class="p-3 p-lg-10 border offset-1">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="nama">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Produk</label>
                    <input type="hidden" name="id_produk" value="{{$produk->id}}">
                    <input type="text" class="form-control" id="c_subject" disabled name="produk" value="{{$produk->nama_produk}}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Alamat<span class="text-danger">*</span></label>
                    <textarea name="alamat" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">No Hp<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="c_subject" name="nohp">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Pesan">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endsection