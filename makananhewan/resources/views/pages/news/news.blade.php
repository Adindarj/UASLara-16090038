@extends('templates.default')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">News</h4>
        
        <div class="table-responsive">
        <table class="table">
        <a href="{{route('news.create')}}" class="btn btn-primary">Tambah</i></a>
            <thead>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach($news as $news)
            <tr>
                <td>{{$no}}</td>
                <td><img src="{{asset('images/'. $news->gambar)}}"></td>
                <td>{{$news->judul}}</td>
                <td>{{$news->kontent}}</td>
                <td>
                    <a href="{{route('news.edit', $news->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('news.destroy', $news->id)}}" onclick="return confirm('hapus data?')" class="btn btn-danger">Delete</a>
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