@extends('templates.default')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Data Penjualan</h4>
                      
                      <form class="forms-sample">
                      <div class="form-group">
                          <label for="exampleInputNomor">id</label>
                          <input type="id" class="form-control" id="Id Produk" placeholder="id">
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_produk" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Pembelian <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tanggal pembelian" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="last-name" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <a href="{{route('penjualan')}}" class="btn btn-light">Cancel</a>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@stop