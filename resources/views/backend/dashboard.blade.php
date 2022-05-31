@extends('backend.layouts.master')
@section('title','Dashboard')

@push('css')
  <!-- custom css here -->
@endpush

@section('content')
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('backend.partials.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      @include('backend.partials.settings-panel')
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
      @include('backend.partials.sidebar')
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dashboard</h4>
                </div>
              </div>
            </div>
          </div>
          
		  
		  
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        @include('backend.partials.footer')
        <!-- partial -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</div>
  <!-- container-scroller -->
@endsection

@push('js')
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
@endpush

