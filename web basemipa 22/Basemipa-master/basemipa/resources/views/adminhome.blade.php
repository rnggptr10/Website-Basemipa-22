@extends('layouts.app')

@section('content')
    @include('layouts.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Selamat Datang ke Website Database Kema FMIPA UNPAD'),
        'class' => 'col-lg-12'
    ])   
    @include('layouts.headers.cards')
    <div class="container">
        <a href="{{ route('hashpasswordallusers') }}"></a>
    </div>
    
    
@endsection

@push('js')
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush