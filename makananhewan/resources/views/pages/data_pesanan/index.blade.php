@extends('templates.default')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Penjualan</h4>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Produk</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Konfirmasi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $no = 1 ?>
                        @foreach($pesanan as $pesanan)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$pesanan->nama}}</td>
                          <td>{{$pesanan->email}}</td>
                          @foreach($produk as $prod)
                            @if($prod->id == $pesanan->id_produk)
                              <td>{{$prod->nama_produk}}</td>
                            @endif
                          @endforeach
                          <td>{{$pesanan->alamat}}</td>
                          <td>{{$pesanan->no_hp}}</td>
                          @if($pesanan->konfirmasi == '1')
                            <td><label class="badge badge-success">Terkirim</label></td>
                          @else
                            <td><label class="badge badge-danger">Belum Terkirim</label></td>
                          @endif
                          <td>
                            @if($pesanan->konfirmasi == '0')
                              <a href="{{route('pesanan.konfirmasi', $pesanan->id)}}" class="btn btn-warning">Konfirmasi</a>
                            @else
                              <a href="{{route('pesanan.destroy', $pesanan->id)}}" onclick="return confirm('yakin hapus?')" class="btn btn-danger">Delete</a>
                            @endif
                          
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