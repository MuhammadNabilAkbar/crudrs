@extends('template.header')
@section('content')
<!-- page content -->     
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <div class="row page-titles">
        <div class="col-md-5 align-self-center">
          <h3 class="text-primary">Edit Data {{ $rumahsakit->nama }}</h3> </div>
        </div>  
     
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     <br>
     <form method="post" action="{{ route('rumahsakit.update', $id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      @csrf

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama RS <span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-6 col-xs-12">
          <input name="nama" value="{{ $rumahsakit->nama  }}" type="text" id="first-name" required="required" class="form-control input-default">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Akreditasi <span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-6 col-xs-12">          
          <select name="akreditasi" value="{{ $rumahsakit->akreditasi }}" id="first-name" required="required" class="form-control ">
            <option disabled>{{ $rumahsakit->akreditasi }}</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis RS <span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-6 col-xs-12">
          <input name="jenis_rs" value="{{ $rumahsakit->jenis_rs }}" type="text" id="first-name" required="required" class="form-control input-default">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi RS <span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-6 col-xs-12">
          <textarea name="deskripsi" type="text" id="first-name" required="required" class="form-control input-default">{{ $rumahsakit->deskripsi }}</textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat RS <span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-6 col-xs-12">
          <textarea name="alamat" type="text" id="first-name" required="required" class="form-control input-default">{{ $rumahsakit->alamat }}</textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <a href="{{ route('rumahsakit.index') }}" class="btn btn-primary">Cancel</a>         
          <button type="submit" class="btn btn-success">Edit</button>
        </div>
      </div>

    </div>
  </div>
</div>      
<!-- /page content -->
@extends('template.footer')
@endsection