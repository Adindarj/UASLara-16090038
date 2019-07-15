@extends('templates.default')

@section('content')
<div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Form</h4>
                      <p class="card-description">
                        
                      </p>
                      <form class="forms-sample">
                      <div class="form-group">
                          <label for="exampleInputId">Id</label>
                          <input type="Id" class="form-control" id="Id" placeholder="Id Produk">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputNamaProduk">NamaProduk</label>
                          <input type="Nama Produk" class="form-control" id="exampleInputNamaProduk" placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputTanggalMasuk">Tanggal Masuk</label>
                          <input type="Tanggal Masuk" class="form-control" id="Tanggal Masuk" placeholder="Tanggal Masuk">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputHarga">Harga</label>
                          <input type="Harga" class="form-control" id="Harga" placeholder="Harga Produk">
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="last-name" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{route('penjualan')}}" class="btn btn-light">Batal</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@stop