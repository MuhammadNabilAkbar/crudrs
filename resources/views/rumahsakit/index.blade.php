  @extends('template.header')
  @section('content')
  <!-- page content -->     
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif

      <div class="x_content">  
       <div class="row page-titles">
        <div class="col-md-5 align-self-center">
          <h3 class="text-primary">Dashboard</h3> </div>
        </div>     
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Export</h4>
            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            <div class="table-responsive m-t-40">
              <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Akreditasi</th>
                    <th>Jenis RS</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>                    
                    <th>Action</th>                    
                  </tr>
                </thead>                
                @foreach($rumahsakits as $value)
                <tbody>
                  <tr>
                    <th>{{ $value->nama }}</th>
                    <th>{{ $value->akreditasi }}</th>
                    <th>{{ $value->jenis_rs }}</th>
                    <th>{{ $value->alamat }}</th>
                    <th>{{ $value->deskripsi }}</th>
                    <th><a class="btn btn-primary" href="{{ route('rumahsakit.edit',$value->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('rumahsakit.delete', $value->id) }}">Delete</a></th>
                  </tr>
                </tbody>
              @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>      
  <!-- /page content -->
  @extends('template.footer')
  @endsection