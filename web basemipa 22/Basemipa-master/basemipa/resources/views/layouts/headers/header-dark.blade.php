<nav class="navbar navbar-expand-lg" style="background-color:#7D0518">
  <div class="container-fluid">
    <a class="navbar-nav" href="/home">
      <img src="{{ asset('img/logo/Askatara.png') }}" alt="" width="50" height="50">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link active text-light" aria-current="page" href="/home">Dashboard</a>
        </li>
        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Anggota KEMA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('himatika') }}">Himatika</a></li>
            <li><a class="dropdown-item" href="{{ route('himaka') }}">Himaka</a></li>
            <li><a class="dropdown-item" href="{{ route('hifi') }}">Hifi</a></li>
            <li><a class="dropdown-item" href="{{ route('himbio') }}">Himbio</a></li>
            <li><a class="dropdown-item" href="{{ route('himasta') }}">Himasta</a></li>
            <li><a class="dropdown-item" href="{{ route('pedra') }}">Pedra</a></li>
            <li><a class="dropdown-item" href="{{ route('himatif') }}">Himatif</a></li>
            <li><a class="dropdown-item" href="{{ route('hmte') }}">Hmte</a></li>
            <li><a class="dropdown-item" href="{{ route('himaktu') }}">Himaktu</a></li>
            <li><a class="dropdown-item" href="{{ route('himatologika') }}">Himatologika</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumni KEMA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('alumni-himatika') }}">Himatika</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-himaka') }}">Himaka</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-hifi') }}">Hifi</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-himbio') }}">Himbio</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-himasta') }}">Himasta</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-pedra') }}">Pedra</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-himatif') }}">Himatif</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-hmte') }}">Hmte</a></li>
            <li><a class="dropdown-item" href="{{ route('alumni-himaktu') }}">Himaktu</a></li>
            <li><a class="dropdown-item" href="#">Himatologika</a></li>
          </ul>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link active text-light" aria-current="page" href="/achievement">Prestasi KEMA</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link active text-light" aria-current="page" href="/bem">Pengurus BEM</a>
        </li>
        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kepanitiaan BEM
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item disabled" href="{{ route('osean') }}">Osean</a></li>
            <li><a class="dropdown-item disabled" href="{{ route('mipa-mengajar') }}">Mipa Mengajar</a></li>
            <li><a class="dropdown-item disabled" href="{{ route('mpc') }}">MPC</a></li>
            <li><a class="dropdown-item disabled" href="{{ route('mipa-award') }}">Mipa Awards</a></li>
            <li><a class="dropdown-item disabled" href="{{ route('mipa-bersatu') }}">Mipa Bersatu</a></li>
            <li><a class="dropdown-item disabled" href="{{ route('ppm') }}">PPM</a></li>
          </ul>
        </li>
    </div>
    <div class="d-flex mr-6">
      <li class="nav-item dropdown ms-auto p-2">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </li>
    </div>
  </div>
</nav>

<div class="content">
  @yield('content')
</div>
<div>
  @yield('footer')
</div>


@push('js')
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jekyll-search.min.js') }}"></script>
<script src="{{ asset('assets/js/sleek.bundle.js') }}"></script>

<!--Table JS-->
<!-- <script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
<script src="assets/plugins/data-tables/datatables.responsive.min.js"></script> -->
<script src="assets/js/sleek.bundle.js"></script>
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