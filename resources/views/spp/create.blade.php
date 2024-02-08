@extends('template.masterfix');

@section('header', 'Tambah Data Genre')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('Spp.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Tahun</label>
            <input name="tahun" type="text" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun"  placeholder="Tahun"
            value = "{{@old('tahun')}}">
          </div>
          @error('tahun')
            <span id="terms-error" class="error invalid-feedback"
            style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="card-body">
            <div class="form-group">
              <input name="nominal" type="text" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal"  placeholder="Nominal"
              value = "{{@old('nominal')}}">
            </div>
            @error('nominal')
              <span id="terms-error" class="error invalid-feedback"
              style="display: inline;">{{ $message }}</span>
            @enderror
          </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Sumbit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection
