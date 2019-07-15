@extends('templates.default')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Data Barang</h4>
                      
                      <form class="forms-sample" action="{{route('produk.store')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_produk" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="harga" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Deskripsi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="deskripsi" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>


                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="last-name" name="foto" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{route('produk')}}" class="btn btn-light">Batal</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@stop