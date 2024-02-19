@extends('template.masterfix');

@section('header', 'Masukan kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', ["kela"=> $kela->id_kelas])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <div class="form-group">
            <input type='text' name="nama_kelas"class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"
             placeholder="nama_kelas" value='{{$kela->nama_kelas}}'>
          </div>
          <div class="col-sm-6">
          <input type='text' name="kompetensi_keahlian"class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kompetensi_keahlian"
             placeholder="kompetensi_keahlian" value='{{$kela->kompetensi_keahlian}}'>
          @error('tahun')
            <span class="eror invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror

            @error('nominal')
              <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
        </div>
    </div>
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection
