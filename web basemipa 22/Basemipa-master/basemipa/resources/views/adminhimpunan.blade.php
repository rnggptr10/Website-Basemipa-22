@extends('layouts.app')

@section('content')
    @include('layouts.headers.none')
    
    <div class="container-fluid mt--0">
        <!-- User Grid -->
        <div class="d-flex flex-row flex-wrap justify-content-around bd-highlight mb-3 mt-3" > 
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NPM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">HIMPUNAN</th>
                            <th scope="col">TEMPAT LAHIR</th>
                            <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">JENIS KELAMIN</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">NO HP</th>
                            <th scope="col">NO HP WALI</th>
                            <th scope="col">AGAMA</th>
                            <th scope="col">ALAMAT RUMAH</th>
                            <th scope="col">ALAMAT KOS</th>
                            <th scope="col">TK</th>
                            <th scope="col">SD</th>
                            <th scope="col">SMP</th>
                            <th scope="col">SMA</th>
                            <th scope="col">OPERATION</th>
                        </tr>
                    </thead>
                    @foreach($users->chunk(1) as $userChunk)                       
                        @foreach($userChunk as $user)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        {{ $user->username }}
                                    </th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->himpunan }}</td>
                                    <td>{{ $user->placeofbirth }}</td>
                                    <td>{{ $user->dateofbirth }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->phone_number_guardians }}</td>
                                    <td>{{ $user->religion }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->address_2 }}</td>
                                    <td>{{ $user->tk }}</td>
                                    <td>{{ $user->sd }}</td>
                                    <td>{{ $user->smp }}</td>
                                    <td>{{ $user->sma }}</td>
                                    <td>{{ $user->sma }}</td>
                                </tr>
                            </tbody>
                        @endforeach 
                    @endforeach
                </table>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush+