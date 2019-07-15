@extends('templates.default')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Barang</h4>
                  
                  <div class="table-responsive">
                    <table class="table">
                    <a href="{{route('produk.create')}}" class="btn btn-primary">Tambah</i></a>
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Foto</th>
                          <th>Nama Produk</th>
                          <th>Harga</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $no = 1 ?>
                        @foreach($produk as $produk)
                        <tr>
                          <td>{{$no}}</td>
                          <td><img src="{{asset('images/'.$produk->foto)}}"></td>
                          <td>{{$produk->nama_produk}}</td>
                          <td>{{$produk->harga}}</td>
                          <td>{{$produk->deskripsi}}</td>
                          
                          <td>
                          <a href="{{route('produk.edit',$produk->id)}}" class="btn btn-warning">Edit</a>
                          <a href="{{route('produk.destroy',$produk->id)}}" onclick="return confirm('Yakin Hapus ?')" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@stop