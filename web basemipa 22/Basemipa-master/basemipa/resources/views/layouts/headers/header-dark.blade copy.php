<script>
  NProgress.configure({
    showSpinner: false
  });
  NProgress.start();
</script>



<div class="wrapper">
  <!-- Github Link -->
  <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
  <aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/home" title="Basemipa">
          <img src="{{ asset('img/logo/lg_00.png') }}" class="navbar-brand-img" style="width:2vw;">
          <span class="brand-name text-truncate">Basemipa</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          <li class="has-sub">
            <a class="sidenav-item-link" href="/home">
              <i class="mdi mdi-view-dashboard-outline"></i>
              <span class="nav-text">Dashboard</span>
            </a>
          </li>

          <li class="has-sub">
            <a class="sidenav-item-link" href="#himpunan" id="himpunanParent" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="himpunan">
              <i class="mdi mdi-human-male-female"></i>
              <span class="nav-text">Anggota Kema</span>
              <i class="mdi mdi-chevron-down"></i>
              <!--<b class="caret"></b>-->
            </a>
            <ul class="collapse" id="himpunan" aria-labelledby="himpunanParent" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li>
                  <a class="sidenav-item-link" href="{{ route('himatika') }}">
                    <span class="nav-text">Himatika</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('himaka') }}">
                    <span class="nav-text">Himaka</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('hifi') }}">
                    <span class="nav-text">Hifi</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('himbio') }}">
                    <span class="nav-text">Himbio</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('himasta') }}">
                    <span class="nav-text">Himasta</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('pedra') }}">
                    <span class="nav-text">Pedra</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('himatif') }}">
                    <span class="nav-text">Himatif</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('hmte') }}">
                    <span class="nav-text">HMTE</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('himaktu') }}">
                    <span class="nav-text">Himaktu</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('tekim') }}">
                    <span class="nav-text">Teknologi Industri Kimia</span>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- alumni kema -->
          <li class="has-sub">
            <a class="sidenav-item-link" href="#alumni" id="alumniParent" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="alumni">
              <i class="mdi mdi-account-tie"></i>
              <span class="nav-text">Alumni Kema</span>
              <i class="mdi mdi-chevron-down"></i>
              <!-- <b class="caret"></b> -->
            </a>
            <ul class="collapse" id="alumni" aria-labelledby="alumniParent" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himatika') }}">
                    <span class="nav-text">Himatika</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himaka') }}">
                    <span class="nav-text">Himaka</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-hifi') }}">
                    <span class="nav-text">Hifi</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himbio') }}">
                    <span class="nav-text">Himbio</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himasta') }}">
                    <span class="nav-text">Himasta</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-pedra') }}">
                    <span class="nav-text">Pedra</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himatif') }}">
                    <span class="nav-text">Himatif</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-hmte') }}">
                    <span class="nav-text">HMTE</span>
                  </a>
                </li>
                <!-- <li>
                  <a class="sidenav-item-link" href="{{ route('alumni-himaktu') }}">
                    <span class="nav-text">Himaktu</span>
                  </a>
                </li> -->
              </div>
            </ul>
          </li>

          <li class="has-sub">
            <a class="sidenav-item-link" href="/achievement">
              <i class="mdi mdi-medal"></i>
              <span class="nav-text">Prestasi Kema</span>
            </a>
          </li>

          <li class="has-sub">
            <a class="sidenav-item-link" href="/bem">
              <i class="mdi mdi-account-group"></i>
              <span class="nav-text">Pengurus BEM</span>
            </a>
          </li>

          <!-- kepanitiaan -->
          <li class="has-sub">
            <a class="sidenav-item-link" href="#kepanitiaan" id="alumniParent" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="kepanitiaan">
              <i class="mdi mdi-clipboard-account"></i>
              <span class="nav-text">Kepanitiaan BEM</span>
              <i class="mdi mdi-chevron-down"></i>
              <!-- <b class="caret"></b> -->
            </a>
            <ul class="collapse" id="kepanitiaan" aria-labelledby="kepanitiaanParent" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li>
                  <a class="sidenav-item-link" href="{{ route('osean') }}">
                    <span class="nav-text">OSEAN</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('mipa-mengajar') }}">
                    <span class="nav-text">Mipa Mengajar</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('mpc') }}">
                    <span class="nav-text">MPC</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('mipa-award') }}">
                    <span class="nav-text">Mipa Awards</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('mipa-bersatu') }}">
                    <span class="nav-text">Mipa Bersatu</span>
                  </a>
                </li>
                <li>
                  <a class="sidenav-item-link" href="{{ route('ppm') }}">
                    <span class="nav-text">PPM</span>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- Prestasi akademik, non-akademik -->
          <!--</li>-->
          <!--<li class="has-sub">-->
          <!--  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#prestasi" aria-expanded="false" aria-controls="prestasi">-->
          <!--    <i class="mdi mdi-medal"></i>-->
          <!--    <span class="nav-text">Prestasi</span> <b class="caret"></b>-->
          <!--  </a>-->

          <!--<ul class="collapse" id="prestasi" data-parent="#sidebar-menu">-->
          <!--  <div class="sub-menu">-->
          <!--    <li>-->
          <!--      <a class="sidenav-item-link" href="{{ route('achievement') }}">-->
          <!--        <span class="nav-text">Prestasi Akademik</span>-->

          <!--      </a>-->
          <!--    </li>-->
          <!--    <li>-->
          <!--      <a class="sidenav-item-link" href="{{ route('achievement') }}">-->
          <!--        <span class="nav-text">Prestasi Non-Akademik</span>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </div>-->
          <!--</ul>-->

          <!--</li>-->

        </ul>

      </div>
    </div>
  </aside>


  <div class="page-wrapper">
    <!-- Header -->
    <header class="main-header " id="header">
      <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
          <div class="input-group d-none">
            <button type="button" name="search" id="search-btn" class="btn btn-flat">
              <i class="mdi mdi-magnify"></i>
            </button>
            <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
          </div>
          <div id="search-results-container">
            <ul id="search-results"></ul>
          </div>
        </div>

        <div class="navbar-right ">
          <ul class="nav navbar-nav">
            <!-- User Account -->
            <li class="dropdown user-menu">
              <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="d-none d-lg-inline-block">{{ auth()->user()->name }}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <!-- <li class="dropdown-header">
                  <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                  <div class="d-inline-block">
                    Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                  </div>
                </li> -->

                <li>
                  <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="mdi mdi-account"></i>
                    <span>{{ __('My profile') }}</span>
                  </a>
                </li>


                <li class="dropdown-footer">
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout"></i>
                    <span>{{ __('Logout') }}</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>


    </header>


    <div class="content-wrapper">
      <div class="content">
        @yield('content')
      </div>



      <div class="right-sidebar-2">
        <div class="right-sidebar-container-2">
          <div class="slim-scroll-right-sidebar-2">

            <div class="right-sidebar-2-header">
              <h2>Layout Settings</h2>
              <p>User Interface Settings</p>
              <div class="btn-close-right-sidebar-2">
                <i class="mdi mdi-window-close"></i>
              </div>
            </div>

            <div class="right-sidebar-2-body">
              <span class="right-sidebar-2-subtitle">Header Layout</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
              </div>

              <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
              <div class="no-col-space">
                <select class="right-sidebar-2-select" id="sidebar-option-select">
                  <option value="sidebar-fixed">Fixed Default</option>
                  <option value="sidebar-fixed-minified">Fixed Minified</option>
                  <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                  <option value="sidebar-static">Static Default</option>
                  <option value="sidebar-static-minified">Static Minified</option>
                  <option value="sidebar-static-offcanvas">Static Offcanvas</option>
                </select>
              </div>

              <span class="right-sidebar-2-subtitle">Header Background</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
              </div>

              <span class="right-sidebar-2-subtitle">Navigation Background</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
              </div>

              <span class="right-sidebar-2-subtitle">Direction</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
              </div>

              <div class="d-flex justify-content-center" style="padding-top: 30px">
                <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
                  Settings</div>
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>



  </div>
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