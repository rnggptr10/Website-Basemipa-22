@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<!-- @include('layouts.footers.footer') -->
@endsection
@section('footer')
@include('layouts.footers.footer')
@endsection

@push('js')
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush