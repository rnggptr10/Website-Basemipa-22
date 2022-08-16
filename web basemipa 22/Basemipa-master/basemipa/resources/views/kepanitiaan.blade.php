@extends('layouts.app')

@section('content')



<!--<div class="breadcrumb-wrapper">-->
<!--  <h1>Tables</h1>-->
<!--  <nav aria-label="breadcrumb">-->
<!--    <ol class="breadcrumb p-0">-->
<!--      <li class="breadcrumb-item">-->
<!--        <a href="index.html">-->
<!--          <span class="mdi mdi-home"></span>-->
<!--        </a>-->
<!--      </li>-->
<!--      <li class="breadcrumb-item">-->
<!--        data-tables-->
<!--      </li>-->
<!--      <li class="breadcrumb-item" aria-current="page">responsive-data-table</li>-->
<!--    </ol>-->
<!--  </nav>-->
<!--</div>-->



<div class="row">
  <div class="col-12">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2>Pengurus Kepanitiaan {{$kepanitiaans->first()->kepanitiaan}}</h2>
        <!--<a href="https://datatables.net/extensions/rowreorder/examples/initialisation/responsive.html" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">-->
        <!--  <i class=" mdi mdi-link mr-1"></i> Docs-->
        <!--</a>-->
        <!-- Public Spreadsheet -->
        <div class="text-right">
          <span>Akses spreadsheet data Pengurus Kepanitiaan</span>
          <i class='fas fa-arrow-right'></i>
          <a class="btn btn-success" href="https://docs.google.com/spreadsheets/d/1LCqGqtBgO8v4VWeaGQym7c04h8HoihUZI5pw_cvf8P4/edit?usp=sharing" role="button">Spreadsheet</a>
          <br>
          <br>
        </div>
      </div>
      <div class="card-body">
        <div class="responsive-data-table">
          <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                @if($kepanitiaans->first()->kepanitiaan == "MPC")
                <th>Tim</th>
                @else
                <th>Jabatan</th>
                @endif
              </tr>
            </thead>
            <div class="d-none">
              {{$no=1}}
            </div>
            <tbody>
              @foreach($kepanitiaans as $kepanitiaan)
              <tr>
                <td>
                  {{ $no++ }}
                </td>
                <td>{{ $kepanitiaan->nama }}</td>
                <td>{{ $kepanitiaan->npm }}</td>
                <td>{{ $kepanitiaan->jurusan }}</td>
                @if($kepanitiaans->first()->kepanitiaan == "MPC")
                <td>{{ $kepanitiaan->tim }}</td>
                @else
                <td>{{ $kepanitiaan->jabatan }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>





<!--Table JS-->
<script src="{{ asset('assets/plugins/daterangepicker/moment.min.js') }} "></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }} "></script>
<script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }} "></script>
<script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.js') }} "></script>
<script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }} "></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
      autoUpdateInput: false,
      singleDatePicker: true,
      locale: {
        cancelLabel: 'Clear'
      }
    });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
      jQuery(this).val('');
    });
  });
</script>

<script>
  jQuery(document).ready(function() {
    jQuery('#responsive-data-table').DataTable({
      "aLengthMenu": [
        [20, 30, 50, 75, -1],
        [20, 30, 50, 75, "All"]
      ],
      "pageLength": 20,
      "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
  });
</script>
@endsection