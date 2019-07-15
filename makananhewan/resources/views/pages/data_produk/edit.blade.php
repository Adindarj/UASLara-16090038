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
                      <form class="forms-sample" action="{{route('produk.update',$produk->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-15 col-sm-15 col-xs-12">
                          <input type="text" id="last-name" name="nama_produk" value="{{$produk->nama_produk}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-15 col-sm-15 col-xs-12">
                          <input type="text" id="last-name" name="harga" required="required" value="{{$produk->harga}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Deskripsi <span class="required">*</span>
                        </label>
                        <div class="col-md-15 col-sm-15 col-xs-12">
                          <input type="text" id="last-name" name="deskripsi" required="required" value="{{$produk->deskripsi}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                        </label>
                         <div class="col-md-15 col-sm-15 col-xs-12">
                          <input type="hidden" name="old_foto" value="{{$produk->foto}}">
                         <input type="file" id="last-name" name="foto" data-buttonname="btn-secondary" class="form-control filestyle col-md-7 col-xs-12">
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