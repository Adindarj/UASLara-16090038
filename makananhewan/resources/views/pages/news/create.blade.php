@extends('templates.default')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah</h4>
            
            <form class="forms-sample" method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputJudul">Judul</label>
                <input type="text" class="form-control" id="exampleInputJudul" placeholder="Judul" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleInputTentang">kontent</label>
                <textarea class="form-control" rows="5" name="kontent" placeholder="kontent" ></textarea>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="last-name" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
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