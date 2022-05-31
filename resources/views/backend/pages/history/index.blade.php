@extends('backend.layouts.master')
@section('title','History')

@push('css')
  <!-- custom css here -->
  <style type="text/css">
    
    
    
  </style>
@endpush

@section('content')
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    @include('backend.partials.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">History Data</h4>
                  <div class="text-right">
                    <a type="button" class="btn btn-primary btn-sm" href="{{ route('input-data') }}">Tambah Data<i class="mdi mdi-plus-circle ml-1"></i></a>
                  </div><br>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table table-history">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>No RM</th>
                                <th>Usia</th>
                                <th>Tanggal Pengkajian</th>
                                <th>Opsi</th>
                            </tr>
                          </thead>
                         
                        </table>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>

            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        @include('backend.partials.footer')
        <!-- partial -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@endsection

@push('js')
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/data-table.js')}}"></script>
  <script src="{{asset('assets/js/modal-demo.js')}}"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript">

    var table_history;

    $(document).ready(function () {
      
      HistoryDatatable();

    });

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    function HistoryDatatable(){
      if (table_history) {
        table_history.destroy();
      }

      table_history = $('table.table-history').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
              url: '{!! route('get-datatable-history') !!}',
          },
          columns: [
              { data: 'DT_RowIndex', orderable: false, searchable: false },
              { data: 'nama_pasien', name: 'nama_pasien'},
              { data: 'no_rm', name: 'no_rm' },
              { data: 'usia', name: 'usia' },
              { data: 'tanggal_pengkajian', name: 'tanggal_pengkajian' },
              { data: 'action', name: 'action', orderable: false, searchable: false },
          ]
      });
    }

  </script>
@endpush
