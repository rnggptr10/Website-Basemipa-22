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
  <h2 style="color: 6D1D1D; margin-bottom:30px">Alumni {{$users->first()->himpunan}}</h2>
    <div class="card card-default">
      <div class="card-body">
        <div class="responsive-data-table">
          <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
            <thead>
              <tr>
                <th>Himpunan</th>
                <th>Angkatan</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users->chunk(4) as $userChunk)
              @foreach($userChunk as $user)
              <tr>
                <td scope="row">
                  {{ $user->himpunan }}
                </td>
                <td>{{ $user->angkatan }}</td>
                <td>{{ $user->name }}</td>
              </tr>
              @endforeach
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