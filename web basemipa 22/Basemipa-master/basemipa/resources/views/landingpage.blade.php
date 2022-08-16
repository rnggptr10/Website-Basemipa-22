<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{ asset('
                    atlantis / css / fonts.min.css ') }}'
                ]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" type="text/css" href="{{asset('/css/index.css')}}">


</head>

<body>
    <div class="content-box">
        <div class="box-container">
            <div class="huruf-besar">
                <p><b>DATABASE KEMA</b></p>
                <p><b>FMIPA UNPAD</b></p>
            </div>
            <div class="huruf-kecil">
                <p>Biro Riset Data</p>
                <p>BEM Kema FMIPA UNPAD</p>
                <p>Kabinet ASKATARA 2022</p>
            </div>
            <button>
                <!-- ? -->
                <a href="/login">Login</a>
            </button>
        </div>
        <div class="box-container">
            <img src="{{ asset('/img/logo/logoAskatara.png') }}" alt="logo Kabinet">
        </div>
    </div>

    <footer>
        <img src="{{ asset('/img/logo/footer.png') }}" alt="logo bem footer" style="height: 40px;">
    </footer>
</body>

</html>