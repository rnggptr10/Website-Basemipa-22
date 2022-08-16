<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

</head>

<body>
    @include('header')
    <main>
        <div class="container r-title">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/himpunan/logo-1.png" alt="">
                </div>
                <div class="col-lg-6">
                    <p class="txt-title">BEM KEMA FMIPA UNPAD 2020 KABINET DHVIJA</p>
                </div>
            </div>
        </div>
        <div>
            <p class="budaya">ASPIRASI KEMA</p>
            <p class="img-txt-home-1 mt-3">"TENTANG RUMAH DENGAN BERBAGAI DINAMIKA WARNA YANG SALING BERKOMPETISI DAN
                MEJUNJUNG
                SEMANGAT KOLABORASI."</p>
            <img class="asset7" src="img/home-1/Asset 7.png" alt="">
        </div>
        <div>
            <p class="budaya mt-5">VISI DAN MISI</p>
            <p class="budaya mt-5">VISI</p>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <img class="alif-1" src="img/home-1/vismiskabem/6.png" alt="" width="35%">
                        <img src="img/home-1/vismiskabem/shape-yellow.svg" alt="" width="80%">
                        <p class="alif">Alifryan Hidayat <br> BEM Kema FMIPA Unpad 2020</p>
                    </div>
                    <div class="col-sm-5">
                        <p class="p1">Makna Keberadaan</p>
                        <p class="p2">Makna <br> Kasih Sayang</p>
                        <p class="p3">Makna Pengembangan</p>
                        <p class="p4">Makna Kebersamaan</p>
                        <p class="txt-visi">Terwujudnya Kema FMIPA Unpad yang bersatu Menebar Makna</p>
                        <img class="layer-6" src="img/home-1/vismiskabem/Layer 6.png" alt="" width="90%">
                    </div>
                    <div class="col-sm-3">
                        <img class="fakhri" src="img/home-1/vismiskabem/1.png" alt="" width="35%">
                        <img src="img/home-1/vismiskabem/shape-orange.svg" alt="" width="80%">
                        <p class="alif">M. Fakhri Rahman <br> Wakil Ketua Bem Kema FMIPA Unpad 2020</p>
                    </div>
                </div>
            </div>
            <p class="budaya mt-5">BUDAYA KERJA</p>
            <div>

            </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-sm-2"></div>
                    <div class="col align-self-center">
                        <img src="img/home-1/BudayaKerja/TEPAT WAKTU.png" alt="" class="p12">
                        <img src="img/home-1/BudayaKerja/BELAJAR.png" alt="" class="p13">
                        <img src="img/home-1/BudayaKerja/EMPATI.png" alt="" class="p14">
                        <img src="img/home-1/BudayaKerja/APRESIATIF.png" alt="" class="p15">
                        <img src="img/home-1/BudayaKerja/RESPONSIF.png" alt="" class="p16">
                        <img class="coretan" src="img/home-1/BudayaKerja/coretan.png" alt="">
                    </div>

                </div>
            </div>
            <img class="asset10" src="img/home-1/Asset 10.png" alt="">
            <p class="budaya mt-5">VIDEO PROFILE</p>
            <h5 class="p5 mt-3">BEM KEMA FMIPA UNPAD 2020</h5>
            <video class="img-title-home" width="400" controls>
                <source src="video.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <p class="p6 mt-3">Kenali Dhvija lebih dalam</p>
            <div class="container mt-5 ">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <a href="https://www.instagram.com/mipacare/">
                            <img class="layer2" src="img/home-1/Logo2/Layer 2.png" alt="">
                            <img src="img/home-1/Logo2/shape-yellow.svg" alt="" width="80%">
                        </a>
                        <p class="p7 mt-3">Mipa Care</p>
                    </div>
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-3">
                        <a href="https://www.instagram.com/mipashop_/">
                            <img class="layer1" src="img/home-1/Logo2/Layer 1.png" alt="">
                            <img src="img/home-1/Logo2/shape-blue.svg" alt="" width="80%">
                        </a>
                        <p class="p8 mt-3">Mipa Shop</p>
                    </div>
                    <div class="col-sm-3">
                        <a href="https://basemipa.com/">
                            <img src="img/home-1/Logo2/shape-blue.svg" alt="" width="80%" id="basemipa">
                        </a>
                        <p class="p9 mt-3">Database Mipa</p>

                    </div>
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-3">
                        <img class="layer3" src="img/home-1/Logo2/Layer3.png" alt="">
                        <img src="img/home-1/Logo2/shape-yellow.svg" alt="" width="80%">
                        <p class="p10 mt-3">Berita Cerita05</p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <p class="p11">IKUTI SOSIAL MEDIA KAMI</p>
                <div class="row justify-content-center">

                    <div class="col-sm-1">
                        <a href="https://www.instagram.com/bemfmipaunpad/">
                            <img src="img/home-1/Body/Layer 8.png" alt="" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-1">
                        <a href="https://twitter.com/bemfmipa_unpad">
                            <img src="img/home-1/Body/Layer 9.png" alt="" width="80%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="margin-top:10%">
        <img class="footer" src="img/home-1/HEADER/footer.svg" alt="">
        <p class="txt-footer">Copyright BEM Kema FMIPA Unpad 2020 Kabinet Dhvija</p>
    </footer>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</html>