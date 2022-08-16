<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('login') }}" method="post" autocomplete="off">
        @csrf
        <div class="box-form">
            <div class="logo-bem">
                <img class="tengah" src="{{ asset('/img/logo/logoLogin.png') }}" alt="logo">
                <p><b>WEBSITE DATABASE KEMA</b></p>
                <P><b>KABINET ASKATARA</b></P>
            </div>

            <div class="label-login">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <!-- <input type="text" style="border-radius: 0px; background-color:#FAFAFA ; border:none; border-bottom: 1px solid #000;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                    <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('username') }}" type="text" name="username" value="{{ old('username') }}" value="admin@argon.com" required autofocus>
                    @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <!-- <input type="password" style="border-radius: 0px; background-color:#FAFAFA ; border:none; border-bottom: 1px solid #000;" class="form-control" id="exampleInputPassword1"> -->
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>

                </div>
            </div>
            <button type="submit" class="sub-btn">Log In</button>
            <div class="mb-3">
                <a href="">Lupa Password ?</a>
            </div>
        </div>
    </form>
    <footer>
        <img src="{{ asset('/img/logo/footer.png') }}" alt="logo bem footer" style="height: 40px;">
    </footer>
</body>

</html>