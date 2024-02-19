@extends('template.masterfix')

@push('css')
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('title', 'Data Pembayaran kelas')

@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('kelas.store') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Kelas</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelas</th>
              <th>Kompetensi Keahlian</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kelas as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama_kelas }}</td>
                    <td>{{ $value->kompetensi_keahlian }}</td>
                    <td>
                        <form
                      action="{{ route('kelas.destroy', $value->id_kelas)}}" method = "post">
                      <a href="{{ route('kelas.edit', $value->id_kelas) }}" class="btn btn-sm btn-warning">
                        Edit
                      </a>

                      @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-sm btn-danger" style="display:inline" value="Hapus">
                      </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Masih Kosong</td>
                </tr>
            @endforelse
        </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection

@push('js')
  <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <script>
    $(function () {
      $("#table").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush
