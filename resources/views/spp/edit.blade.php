@extends('template.masterfix');

@section('header', 'Masukan SPP')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('Spp.update', $spp->id_spp)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <div class="form-group">
            <input type='text' name="tahun"class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun"
             placeholder="Tahun" value='{{$spp->tahun}}'>
          </div>
          <div class="col-sm-6">
          <input type='text' name="nominal"class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="tahun"
             placeholder="Nominal" value='{{$spp->nominal}}'>
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
