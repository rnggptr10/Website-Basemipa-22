<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
</head>

<body>
    @include('header')
    <main>
        <div class="container">
            <p class="title-kontak">KONTAK KAMI</p>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="font-weight: bold">Sekretariat BEM Kema FMIPA Unpad 2020</label>
                    <p>Gd. Dekanat FMIPA Unpad, Jl. Raya Bandung Sumedang No.Km 21, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45361</p>
                </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlTextarea1" style="font-weight: bold">Email</label>
                    <p>bemfmipaunpad2020@gmail.com</p>
                </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlTextarea1" style="font-weight: bold">Sosial Media</label>
                    <p>Line@: hcj4184v
                        <br>
                        Twitter : bemfmipa_unpad
                        <br>
                        Instagram : bemfmipaunpad
                    </p>
                </div>
            </form>
        </div>
    </main>
    <footer style="margin-top:10%">
        <img class="footer" src="img/kontak/footer.svg" alt="">
        <p class="txt-footer">Copyright BEM Kema FMIPA Unpad 2020 Kabinet Dhvija</p>
    </footer>
</body>

</html>