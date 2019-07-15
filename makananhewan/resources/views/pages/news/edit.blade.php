@extends('templates.default')

@section('content')
<div class="col-md-6 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Form</h4>
            <p class="card-description"></p>
            <form class="forms-sample" method="post" action="{{route('news.update', $news->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
            <div class="form-group">
                <label for="exampleInputJudul">Judul</label>
                <input type="text" class="form-control" id="exampleInputJudul" value="{{$news->judul}}" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleInputTentang">kontent</label>
                <textarea class="form-control" rows="5" name="kontent">{{$news->kontent}}</textarea>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" name="old_gambar" value="{{$news->gambar}}">
                    <input type="file" id="last-name" name="gambar" class="form-control col-md-7 col-xs-12">
                </div>
             </div>

            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a href="{{route('news')}}" class="btn btn-light">Cancel</a>
            
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@stop