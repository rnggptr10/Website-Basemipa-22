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
        <!-- Himpunan -->
        <img src="img/himpunan/Himpunan.png" alt="himpunan" class="center-him">
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="himatika" src="img/himpunan/himatika.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-orange.svg" alt="">
                    <img class="himaka" src="img/himpunan/himaka.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="hifi" src="img/himpunan/hifi.png" alt="">
                </div>
            </div>
            <div class="row txt-him mt-3">
                <div class="col-sm-3">
                    HIMATIKA
                </div>
                <div class="col-sm-3">
                    HIMAKA
                </div>
                <div class="col-sm-3">
                    HIFI
                </div>
            </div>
            <div class="row justify-content-md-center mt-5">
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="himatika" src="img/himpunan/himbio.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-orange.svg" alt="">
                    <img class="himaka" src="img/himpunan/geofis.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="hifi" src="img/himpunan/himasta.png" alt="">
                </div>
            </div>
            <div class="row txt-him mt-3">
                <div class="col-sm-3">
                    HIMBIO
                </div>
                <div class="col-sm-3">
                    PEDRA
                </div>
                <div class="col-sm-3">
                    HIMASTA
                </div>
            </div>
            <div class="row justify-content-md-center mt-5">
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="himatika" src="img/himpunan/himatif.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-orange.svg" alt="">
                    <img class="himaka" src="img/himpunan/hmte.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="hifi" src="img/himpunan/himaktu.png" alt="">
                </div>
            </div>
            <div class="row txt-him mt-3">
                <div class="col-sm-3">
                    HIMATIF
                </div>
                <div class="col-sm-3">
                    HMTE
                </div>
                <div class="col-sm-3">
                    HIMAKTU
                </div>
            </div>
        </div>

        <!-- Unit kegiatan mahasiswa -->
        <img src="img/himpunan/Unit Kegiatan Mahasiswa.png" alt="himpunan" class="center-him">
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="caldera" src="img/himpunan/Logo UKM Caldera.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-orange.svg" alt="">
                    <img class="scaba" src="img/himpunan/Logo UKM Scaba.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="basmi" src="img/himpunan/Logo UKM Basmi.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="fuma" src="img/himpunan/Logo UKM Fuma.png" alt="">
                </div>
            </div>
            <div class="row txt-unit mt-3">
                <div class="col-sm-3">
                    CALDERA
                </div>
                <div class="col-sm-3">
                    SCABA
                </div>
                <div class="col-sm-3">
                    BASMI
                </div>
                <div class="col-sm-3">
                    FUMA
                </div>
            </div>
        </div>

        <!-- Kelompok kegiatan mahasiswa -->
        <img src="img/himpunan/Kelompok Kegiatan Mahasiswa.png" alt="himpunan" class="center-him">
        <div class="container ct-kel mt-5 mb-5">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-blue.svg" alt="">
                    <img class="voltase" src="img/himpunan/voltase.png" alt="">
                </div>
                <div class="col-md-3">
                    <img class="shape" src="img/himpunan/shape-orange.svg" alt="">
                    <img class="artemipa" src="img/himpunan/artemipa.png" alt="">
                </div>
            </div>
            <div class="row txt-kel mt-3">
                <div class="col-sm-5">
                    VOLTASE
                </div>
                <div class="col-sm-3">
                    ARTEMIPA
                </div>
            </div>
        </div>
    </main>

    <footer>
        <img class="footer" src="img/himpunan/footer.svg" alt="">
        <p class="txt-footer">Copyright BEM Kema FMIPA Unpad 2020 Kabinet Dhvija</p>
    </footer>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>