@extends('template.master');

@section('title', 'Tambah Data kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Pemeran</label>
                <input name="nama" type="text" class="form-control " id="nama"  placeholder="Nama Pemeran" value="{{ $kelas->nama }}" disabled>
              </div>
              <div class="form-group">
                <label for="nama">Umur</label>
                <input name="umur" type="number" class="form-control" id="nama"  placeholder="Umur Pemeran" value="{{$kelas->umur}}" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Biografi Pemeran</label>
                <textarea name="bio" id="bio" class="form-control" cols="30" rows="5" placeholder="Biografi Pemeran" disabled>{{ $kelas->bio }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
           <a href="{{route("kelas.index")}}" class="btn btn-info">Back</a>
        </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
