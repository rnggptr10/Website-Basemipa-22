@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
<div class="bg-white border rounded">
    <div class="row no-gutters">
        <div class="col-lg-12 col-xl-12">
            <div class="profile-content-right py-5">
                <div class="card text-center px-0 border-0">

                    <div class="card-img mx-auto rounded-circle">
                        <img src="https://media.unpad.ac.id/photo/mahasiswa/{{substr(auth()->user()->username, 0, 6)}}/20{{substr(auth()->user()->username, 6, 2)}}/{{auth()->user()->username}}.JPG" alt="user image">
                    </div>

                    <div class="card-body">
                        <h4 class="py-2 text-dark">{{ auth()->user()->name }}</h4>
                        <p>{{ auth()->user()->username }}</p>
                    </div>
                </div>
                <hr class="my-4" />
                <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Data Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Data Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pass-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Edit Password</a>
                    </li>
                </ul>
                <div class="tab-content px-3 px-xl-5" id="myTabContent">
                    <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                        <div class="mt-5">
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('post')
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('development') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Pelatihan') }}</label>
                                        <textarea name="development" id="input-development" class="form-control form-control-alternative{{ $errors->has('development') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->development !!}
                                    </textarea>
                                        @if ($errors->has('development'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('development') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('achievement') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Prestasi') }}</label>
                                        <textarea name="achievement" id="input-achievement" class="form-control form-control-alternative{{ $errors->has('achievement') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->achievement !!}
                                    </textarea>
                                        @if ($errors->has('achievement'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('achievement') }}</strong>
                                        </span>
                                        @endif
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="mt-5">
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('post')



                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('organization') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Organisasi') }}</label>
                                        <textarea name="organization" id="input-organization" class="form-control form-control-alternative{{ $errors->has('organization') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                        {{ auth()->user()->organization }}
                                        </textarea>
                                        @if ($errors->has('organization'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organization') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('committee') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Kepanitiaan') }}</label>
                                        <textarea name="committee" id="input-committee" class="form-control form-control-alternative{{ $errors->has('committee') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->committee !!}
                                    </textarea>
                                        @if ($errors->has('committee'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('committee') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="mt-5">
                            <div class="form-group mb-4">
                                <label class="form" for="input-name">Name</label>
                                <label type="text" name="name" id="input-name" class="form-control" placeholder="{{ __('Name') }}" value="">{{ old('name', auth()->user()->name) }}</label>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group{{ $errors->has('himpunan') ? ' has-danger' : '' }}">
                                        <label class="form" for="input-himpunan">Himpunan</label>
                                        <label type="text" name="himpunan" id="input-himpunan" class="form-control{{ $errors->has('himpunan') ? ' is-invalid' : '' }}" placeholder="{{ __('Himpunan') }}" value="">{{ old('himpunan', auth()->user()->himpunan) }}</label>

                                        @if ($errors->has('himpunan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('himpunan') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }} mb-4">
                                        <label class="form" for="input-npusernamem">NPM</label>
                                        <label type="text" name="npm" id="input-npm" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('NPM') }}" value="">{{ old('username', auth()->user()->username) }}</label>

                                        @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <div class="form-group{{ $errors->has('placeofbirth') ? ' has-danger' : '' }}">
                                        <label class="form" for="input-placeofbirth">Tempat Lahir</label>
                                        <label type="text" name="placeofbirth" id="input-placeofbirth" class="form-control{{ $errors->has('placeofbirth') ? ' is-invalid' : '' }}" placeholder="{{ __('Tempat Lahir') }}" value="">{{ old('placeofbirth', auth()->user()->placeofbirth) }}</label>

                                        @if ($errors->has('placeofbirth'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('placeofbirth') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group{{ $errors->has('dateofbirth') ? ' has-danger' : '' }}">
                                        <label class="form" for="input-dateofbirth">Tanggal Lahir</label>
                                        <label type="text" name="dateofbirth" id="input-dateofbirth" class="form-control{{ $errors->has('dateofbirth') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Lahir') }}" value="">{{ old('dateofbirth', auth()->user()->dateofbirth) }}</label>

                                        @if ($errors->has('dateofbirth'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dateofbirth') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                        <label class="form" for="input-gender">Jenis Kelamin</label>
                                        <label type="text" name="gender" id="input-gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" placeholder="{{ __('Jenis Kelamin') }}" value="">{{ old('gender', auth()->user()->gender) }}</label>

                                        @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />

                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('post')

                                <h6 class="heading-small text-muted mb-4">{{ __('Edit User information') }}</h6>

                                @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('E-mail') }}</label>
                                        <input type="text" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-phone_number">{{ __('No Ponsel Seluler') }}</label>
                                        <input type="text" name="phone_number" id="input-phone_number" class="form-control form-control-alternative{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('No Ponsel Seluler') }}" value="{{ old('phone_number', auth()->user()->phone_number) }}" required>

                                        @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone_number_guardians') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-phone_number_guardians">{{ __('No Ponsel Seluler Wali') }}</label>
                                        <input type="text" name="phone_number_guardians" id="input-phone_number_guardians" class="form-control form-control-alternative{{ $errors->has('phone_number_guardians') ? ' is-invalid' : '' }}" placeholder="{{ __('No Ponsel Seluler Wali') }}" value="{{ old('phone_number_guardians', auth()->user()->phone_number_guardians) }}" required>

                                        @if ($errors->has('phone_number_guardians'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number_guardians') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('religion') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-religion">{{ __('Agama') }}</label>
                                        <input type="text" name="religion" id="input-religion" class="form-control form-control-alternative{{ $errors->has('religion') ? ' is-invalid' : '' }}" placeholder="{{ __('Agama') }}" value="{{ old('religion', auth()->user()->religion) }}" required>

                                        @if ($errors->has('religion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('religion') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-address">{{ __('Alamat Rumah') }}</label>
                                        <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat Rumah') }}" value="{{ old('address', auth()->user()->address) }}" required>

                                        @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('address_2') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-address_2">{{ __('Alamat Kosan') }}</label>
                                        <input type="text" name="address_2" id="input-address_2" class="form-control form-control-alternative{{ $errors->has('address_2') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat Kos') }}" value="{{ old('address_2', auth()->user()->address_2) }}" required>

                                        @if ($errors->has('address_2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('tk') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-tk">{{ __('Taman Kanak-kanak') }}</label>
                                        <input type="text" name="tk" id="input-tk" class="form-control form-control-alternative{{ $errors->has('tk') ? ' is-invalid' : '' }}" placeholder="{{ __('Taman Kanak-kanak') }}" value="{{ old('tk', auth()->user()->tk) }}" required>

                                        @if ($errors->has('tk'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tk') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('sd') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-sd">{{ __('Sekolah Dasar') }}</label>
                                        <input type="text" name="sd" id="input-sd" class="form-control form-control-alternative{{ $errors->has('sd') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Dasar') }}" value="{{ old('sd', auth()->user()->sd) }}" required>

                                        @if ($errors->has('sd'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sd') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('smp') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-smp">{{ __('Sekolah Menengah Pertama') }}</label>
                                        <input type="text" name="smp" id="input-smp" class="form-control form-control-alternative{{ $errors->has('smp') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Menengah Pertama') }}" value="{{ old('smp', auth()->user()->smp) }}" required>

                                        @if ($errors->has('smp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('smp') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('sma') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-sma">{{ __('Sekolah Menengah Atas') }}</label>
                                        <input type="text" name="sma" id="input-sma" class="form-control form-control-alternative{{ $errors->has('sma') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Menengah Atas') }}" value="{{ old('sma', auth()->user()->sma) }}" required>

                                        @if ($errors->has('sma'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sma') }}</strong>
                                        </span>
                                        @endif
                                    </div>



                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="pass-tab">
                        <div class="mt-5">
                            <form method="post" action="{{ route('profile.password') }}">
                                @csrf
                                @method('post')

                                @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                        <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                                        @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection