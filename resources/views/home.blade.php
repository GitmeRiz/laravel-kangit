@extends('layouts.base')

@section('title', 'Kang IT - Entrepreneur Muda')

@section('content')
    <header class="custom-mode" style="padding-top: 0px">
        <section class="nh-navbar">
            <div class="container">
                <nav class="nh-navbar__nav  navbar navbar-expand-xl navbar-dark bg-transparent">
                    <a class="navbar-brand" aria-label="Logo Kang iT" href="/">
                        <img class="img-fluid d-none d-md-block" src="images/logo-web.svg" alt="logo">
                        <img class="img-fluid d-block d-md-none" src="images/logo-mobile.svg" alt="logo">
                    </a>
                    <ul class="nh-navbar__nav-child  d-xl-none">
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="linkh1 nh-navbar__nav-item  active ">
                                <a class="nh-navbar__nav-link  nav-link" href="/">Beranda</a>
                            </li>
                            <li class="linkh2 nh-navbar__nav-item">
                                <a class="nh-navbar__nav-link  nav-link" href="#visi-misi">Visi &amp; Misi</a>
                            </li>
                            <li class="linkh3 nh-navbar__nav-item">
                                <a class="nh-navbar__nav-link  nav-link" href="#layanan">Layanan</a>
                            </li>
                            <li class="linkh4 nh-navbar__nav-item">
                                <a class="nh-navbar__nav-link  nav-link" href="#produk">Produk</a>
                            </li>
                            <li style="display: none;" class="linkh5 nh-navbar__nav-item">
                                <a class="nh-navbar__nav-link  nav-link" href="#client">Kustomer</a>
                            </li>
                            <li class="linkh6 nh-navbar__nav-item">
                                <a class="nh-navbar__nav-link  nav-link" href="#kontak">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <style>
            .custom-mode {
                background: radial-gradient(51.39% 105.71% at 72.47% 50%, #3461eb 0%, #6086f7 100%);
            }

            .hero__image-wrapper--power-up-website {
                margin-bottom: 50px;
            }
        </style>
        <section class="hero hero--work-frome-home">
            <div id="beranda" class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="hero__title hero__title--work-from-home">Apa itu Kang iT?</h1>
                        <h2 class="hero__description hero__description--work-from-home">Kang iT merupakan sebuah
                            perusahaan yang berdiri pada tanggal 3 Maret 2020, yang bergerak di bidang jasa perawatan
                            komputer dan penyedia layanan internet. Dengan tujuan memberikan kepuasan pelanggan dengan
                            produk dan layanan yang berkualitas. Dan memperluas jaringan ke pelosok-pelosok desa yang
                            masih sulit mengakses layanan internet.</h2>
                        <a class="nh-btn nh-btn--orange" href="/">Selengkapnya</a>
                    </div>
                    <div class="hero__image-wrapper hero__image-wrapper--power-up-website col-lg-6">
                        <img class="img-fluid" src="images/hero.svg" alt="Kang IT">
                    </div>
                </div>
            </div>
            <img style="width: 100%;" src="images/wave.png" alt="">
        </section>

        <script>
            $('.hero--work-frome-home a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#latar-belakang").offset().top - 50
                }, 1000);
            });
            $('.linkh1 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#beranda").offset().top - 50
                }, 1000);
            });
            $('.linkh2 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#visi-misi").offset().top - 50
                }, 1000);
            });
            $('.linkh3 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#layanan").offset().top - 50
                }, 1000);
            });
            $('.linkh4 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#produk").offset().top - 50
                }, 1000);
            });
            $('.linkh5 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#client").offset().top - 50
                }, 1000);
            });
            $('.linkh6 a').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: offset = $("#kontak").offset().top - 50
                }, 1000);
            });
        </script>
    </header>
    <style>
        .nh-navbar--sticky {
            background: radial-gradient(51.39% 105.71% at 72.47% 50%, #3461eb 0%, #3461eb 100%);
        }

        .package__best-seller {
            background: #E22D1F;
        }

        .package__best-seller::after {
            border-top-color: #E22D1F;
        }
    </style>
    <section class="latar">
        <div id="latar-belakang" class="container">
            <h2 class="latar__title" data-aos="zoom-in">Latar Belakang</h2>
            <p class="latar__description" data-aos="fade-up">Dengan semakin berkembang dan tingginya kebutuhan
                masyarakat terhadap pelayanan yang terhubung dengan kebutuhan perangkat keras(Hardware), perangkat
                lunak(Software), Internet. Maka terbentuklah Kang iT yang berawal dari sekumpulan pelajar yang mempunyai
                ide untuk mengembangkan bakat dan prestasi semasa di sekolah untuk disalurkan kedunia industri dan
                teknologi.</p>
        </div>
    </section>

    <section class="priority">
        <div id="visi-misi" class="container">
            <h3 class="priority__title">Visi dan Misi</h3>
            <div class="row">
                <div class="priority__image-wrapper  col-lg-6 order-lg-2" data-aos='fade-left'>
                    <div class="d-inline-block position-relative">
                        <img class="priority__image priority__image--server  img-fluid" alt=""
                            src="image/kangit-server.png">
                        <img data-aos='fade-up-right' class="priority__image priority__image--graphic  img-fluid"
                            alt="" src="image/bgweb2.png">
                        <img class="priority__image priority__image--imunify  img-fluid" alt=""
                            src="image/kangit-network.png">
                        <img class="priority__image priority__image--lite-speed  img-fluid" alt=""
                            src="image/kangit-coding.png">
                    </div>
                </div>
                <div class="priority__feature-wrapper  col-lg-6 order-lg-1">
                    <div class="priority__feature" data-aos='fade-right'>
                        <h4 class="priority__feature-title">Visi</h4>
                        <p class="priority__feature-description">
                        <ul>
                            <li>Menjadi penyedia layanan berbasi ICT (Information And Comunication Technology) yang
                                terpercaya.</li>
                            <li>Dapat menjadi solusi dalam hal IT yang dikenal masyarakat luas.</li>
                            <li>Penyedia layanan dibidang teknologi yang berdaya saing tinggi, dengan memberikan
                                layanan dan solusi terbaik, serta mengedepankan kepuasan pelanggan.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="priority__feature" data-aos='fade-right'>
                        <h4 class="priority__feature-title">Misi</h4>
                        <p class="priority__feature-description">
                        <ul>
                            <li>Menjadi prioritas dihati pelanggan dengan cara memberikan layanan maksimal yang
                                bertanggung jawab, Inovatif , kreatif dan profesional.</li>
                            <li>Selalu mengutamakan kwalitas, ketepatan waktu, serta harga yang kompetitive.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services-v2">
        <div id="layanan" class="container">
            <h3 class="our-services-v2__title">Layanan Kang iT</h3>
        </div>
        <div id="layanan-1">
            <div class="layanan-1-container layanan-1-row">
                <div class="layanan-1-layanan-1-widgets">
                    <div class="layanan-1-list layanan-1-right-side-layanan-1-widget layanan-1-section"
                        id="intro-services-right" name="Right Author Services">
                        <div class="layanan-1-widget layanan-1-Image" data-version="2" id="layanan-1-Image21">
                            <div class="layanan-1-widget-content">
                                <style type="text/css">
                                    #layanan-1 {
                                        display: block
                                    }
                                </style>
                                <div class="service-content wl1" data-aos='flip-up'>
                                    <span class="service-icon"><i class="fa lnr lnr-cloud-sync"></i></span>
                                    <div class="service-content-details">
                                        <h3 class="service-title">Computer Enginnering</h3>
                                        <p class="service-snippet">Melayani Service Laptop mulai dari Hardware dan
                                            Software.
                                        </p>
                                    </div>
                                    <span class="count-number">1</span>
                                </div>
                            </div>
                        </div>
                        <div class="layanan-1-widget layanan-1-Image" data-version="2" id="layanan-1-Image22">
                            <div class="layanan-1-widget-content">
                                <style type="text/css">
                                    #layanan-1 {
                                        display: block
                                    }
                                </style>
                                <div class="service-content wl2" data-aos='flip-up'>
                                    <span class="service-icon"><i class="fa lnr lnr-users"></i></span>
                                    <div class="service-content-details">
                                        <h3 class="service-title">Designer</h3>
                                        <p class="service-snippet">Melayani desain Logo, Banner, Surat Undangan, Baju,
                                            Spanduk, dll.</p>
                                    </div>
                                    <span class="count-number">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="layanan-1-widget layanan-1-Image" data-version="2" id="layanan-1-Image23">
                            <div class="layanan-1-widget-content">
                                <style type="text/css">
                                    #layanan-1 {
                                        display: block
                                    }
                                </style>
                                <div class="service-content wl3" data-aos='flip-up'>
                                    <span class="service-icon"><i class="fa lnr lnr-magic-wand"></i></span>
                                    <div class="service-content-details">
                                        <h3 class="service-title">Network Sulution</h3>
                                        <p class="service-snippet">Memberikan solusi untuk jaringan Perkantoran,
                                            Pabrik,
                                            Rumah, Coffe, dll.</p>
                                    </div>
                                    <span class="count-number">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="layanan-1-widget layanan-1-Image" data-version="2" id="layanan-1-Image24">
                            <div class="layanan-1-widget-content">
                                <style type="text/css">
                                    #layanan-1 {
                                        display: block
                                    }
                                </style>
                                <div class="service-content wl4" data-aos='flip-up'>
                                    <span class="service-icon"><i class="fa lnr lnr-leaf"></i></span>
                                    <div class="service-content-details">
                                        <h3 class="service-title">Internet Service Provider</h3>
                                        <p class="service-snippet">Menyediakan layanan Internet murah melalui jaringan
                                            Hotspot</p>
                                    </div>
                                    <span class="count-number">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="brr"></div>
    <section class="cost-saving">
        <div id="produk" class="container">
            <h3 class="cost-saving__title">Produk &amp; Jasa</h3>
            <div class="row">
                <div class="cost-saving__image-wrapper  col-lg-6">
                    <div class="d-inline-block position-relative">
                        <img data-aos='fade-right' class="cost-saving__image cost-saving__image--banner  img-fluid"
                            alt="" src="image/bgweb3.png">
                        <img data-aos='fade-up' class="cost-saving__image cost-saving__image--man  img-fluid"
                            alt="" src="image/kangit-vscode.png">
                        <img data-aos='fade-down' class="cost-saving__image cost-saving__image--intercom-logo  img-fluid"
                            alt="" src="image/kangit-wordpress.png">
                        <img data-aos='fade-up' class="cost-saving__image cost-saving__image--icon-online  img-fluid"
                            alt="" src="image/kangit-xampp.png">
                    </div>
                </div>
                <div class="cost-saving__feature-wrapper  col-lg-6">
                    <div class="cost-saving__feature" data-aos='fade-left'>
                        <h4 class="cost-saving__feature-title">Desain</h4>
                        <p class="cost-saving__feature-description">Dalam hal marketing atau pemasaran dibutuhkan
                            sebuah
                            desain, sebab desain akan memberikan kesan penting terhadap konsumen dalam tercapainya suatu
                            target. Desain dalam pemasaran bisa berupa web, desain poster, brosur, logo, dll.</p>
                    </div>
                    <div class="cost-saving__feature" data-aos='fade-left'>
                        <h4 class="cost-saving__feature-title">Website Sekolah</h4>
                        <p class="cost-saving__feature-description">Sekolah dapat memberikan informasi terkait profile
                            Sekolah kepada Orang tua untuk mengetahui seberapa bagus kualitas dan perkembangan sekolah
                            tersebut.</p>
                    </div>
                    <div class="cost-saving__feature" data-aos='fade-left'>
                        <h4 class="cost-saving__feature-title">Instalasi Network &amp; CCTV</h4>
                        <p class="cost-saving__feature-description">Di era digital ini jaringan internet sangat di
                            butuhkan sekali terutama pada Perkantoran, Perindustrian, dan juga Sekolah. Dan adanya CCTV
                            pihak berwenang dapat memantau Peristiwa dan Kejadian seperti kecelakaan kerja dan juga
                            Kriminalitas yang terjadi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <section style="display: none" class="our-clients-v2">
        <div id="client" class="container">
            <h3 class="our-clients__title">Kustomer Kami</h3>
            <div class="payment-list__icon-wrapper">
                <img class="payment-list__icon img-fluid" src="assets/images/2019/payment-gateway/bca.svg"
                    alt="BCA">
            </div>
        </div>
    </section>


    <section class="success-online">
        <center>
            <h3 class="slogan" data-aos="fade-right">Your time is limited, so don’t waste it living someone else’s
                life
            </h3>
        </center>
    </section>

    <footer class="footer" style="display: block; padding: 50px 5% 24px !important;">
        <div id="kontak" class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3" data-aos="flip-up">
                    <h3 class="footer__column-title">Hubungi Kami</h3>
                    <p class="footer__contact">Telp: <a href="#">0852-3179-2692</a>
                        <br>WA: <a href="https://api.whatsapp.com/send?phone=6285231792692">0852-3179-2692</a><br>Senin
                        - Sabtu<br>08.00 - 17.00
                    </p>
                    <p class="footer__address">Dsn. Adisono Gg. 1<br>Ds. Lebaksono Kec. Pungging<br>Kab. Mojokerto
                        61384
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0" data-aos="flip-up">
                    <h3 class="footer__column-title">Layanan</h3>
                    <ul class="footer__menu-list">
                        <li><a class="footer__menu" href="#">Desain</a></li>
                        <li><a class="footer__menu" href="#">Service Laptop</a></li>
                        <li><a class="footer__menu" href="#">Instalasi Jaringan</a></li>
                        <li><a class="footer__menu" href="#">Pemasangan CCTV</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0" data-aos="flip-up">
                    <h3 class="footer__column-title">Produk</h3>
                    <ul class="footer__menu-list">
                        <li><a class="footer__menu" href="#">Jam Digital</a></li>
                        <li><a class="footer__menu" href="#">Jam Sekolah</a></li>
                        <li><a class="footer__menu" href="#">Running Text</a></li>
                        <li><a class="footer__menu" href="#">Website Sekolah</a></li>
                        <li><a class="footer__menu" href="#">Website Personal</a></li>
                        <li><a class="footer__menu" href="#">Website Ecommerce</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0" data-aos="flip-up">
                    <h3 class="footer__column-title">Kenapa Harus Kang iT?</h3>
                    <ul class="footer__menu-list">
                        <li><a class="footer__menu" href="#">Tepat Waktu</a></li>
                        <li><a class="footer__menu" href="#">Ramah terhadap Pelanggan</a></li>
                        <li><a class="footer__menu" href="#">Pengerjaan Rapi</a></li>
                        <li><a class="footer__menu" href="#">Bergaransi</a></li>
                        <li><a class="footer__menu" href="#">Memberikan kualitas terbaik</a></li>
                        <li><a class="footer__menu" href="#">Mendahulukan kepuasan pelanggan</a></li>
                    </ul>
                </div>
            </div>
            <center style="margin: 40px 0 0;">
                <p style="font-size: 12pt; color: #fff;">Copyright ©2020 Kang iT | Entrepreneur Muda</p>
            </center>
            <div style="display: none;" class="row mt-5">
                <div class="col-12 col-md-7">
                    <p style="font-size: 12pt;" class="footer__copyright  text-center text-md-right">Copyright ©2020
                        Kang iT | Entrepreneur Muda</p>
                </div>
                <div style="display: none;" class="col-12 col-md-5 mt-5 mt-md-0">
                    <div class="footer__privacy-policy  text-center text-md-right">
                        <a href="#">Syarat dan Ketentuan</a>
                        <span>|</span>
                        <a href="#">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer style="display:none" id="kontak">
        <p class="text">Butuh bantuan hubungi kami</p>
        <form>
            <input type="text" required>
            <input type="submit" value="Send">
        </form>
        <ul class="list-footer">
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Help</a></li>
        </ul>
        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <p class="copyrights">&copy; 2020 KANG IT</p>
    </footer>
    <div class="liveSales_widget"></div>
    <script type="text/javascript">
        //<![CDATA[
        var dataSales = {
            "Kevin Frimanzah": {
                "screenshotURL": "https://api.whatsapp.com/send?phone=6285231792692",
                "avatarURL": "avatars/Kevin-Frimanzah.png",
                "time": "2020-8-20",
                "productName": "Membeli Running Text",
                "productURL": "#",
            },
            "Rezja Zalva": {
                "screenshotURL": "https://api.whatsapp.com/send?phone=6285231792692",
                "avatarURL": "avatars/Rezja.png",
                "time": "2020-7-29",
                "productName": "Menservice Laptop",
                "productURL": "#",
            },
            "Epi": {
                "screenshotURL": "https://api.whatsapp.com/send?phone=6285231792692",
                "avatarURL": "avatars/Epi.png",
                "time": "2020-8-5",
                "productName": "Menservice Laptop",
                "productURL": "#",
            },
            "@-aya": {
                "screenshotURL": "https://api.whatsapp.com/send?phone=6285231792692",
                "avatarURL": "avatars/aya.jpeg",
                "time": "2020-9-1",
                "productName": "Perawatan Laptop",
                "productURL": "#",
            },
            "Bayu": {
                "screenshotURL": "https://api.whatsapp.com/send?phone=6285231792692",
                "avatarURL": "avatars/bayu.jfif",
                "time": "2020-9-5",
                "productName": "Menservice Laptop",
                "productURL": "#",
            },
        };
        //]]>
    </script>
    <script>
        //<![CDATA[
        $.each(dataSales, function(key, value) {
            var ifavatarURL =
                '//lh3.googleusercontent.com/-QlJpOYV6yF4/XNEPty8zjJI/AAAAAAAAF6k/7RaA8suy7AsVhOYwcP6WLMf2qc54GUXWwCEwYBhgL/h60/ava.png';
            if (value.avatarURL != '') {
                ifavatarURL = value.avatarURL;
            }
            $('\
                                      <div class="item" datetime="' + value.time + '">\
                                      <span class="avatarURL" style="background-image:url(' + ifavatarURL + ');"></span>\
                                      <h5><a class="closeliveSales_widget" href="javascript:void(0);"><i class="icon ion-ios-close"></i></a></h5>\
                                      <span class="infoOrder">\
                                      <b>' + key + '</b> telah <a href="' + value.productURL + '" target="_blank">' + value
                .productName + '</a>\
                                      <small><a href="' + value.screenshotURL +
                '" class="popWin" data-popWidth="304" title="- Bukti Transfer dari ' +
                key +
                '"><i class="icon ion-ios-search"></i> Cek</a><i class="icon ion-md-pricetag"></i> <time class="timeago" datetime="' +
                value.time + '"></time></small>\
                                      </span>\
                                      </div>\
                                      ').appendTo('.liveSales_widget');
        });
        $(".liveSales_widget > .item:gt(0)").removeClass('active');
        setInterval(function() {
            $('.liveSales_widget > .item:first').removeClass('active')
            setTimeout(function() {
                $('.liveSales_widget > .item:first').next().addClass('active').end().appendTo(
                    '.liveSales_widget');
            }, 4000);
        }, 8000);


        $(document).on('click', '.liveSales_widget .closeliveSales_widget', function() {
            $(this).parents('.item').addClass('hidden');
        });

        function timeAgo(timeStamp) {
            var previous = new Date(timeStamp);
            var current = new Date();
            var msPerMinute = 60 * 1000;
            var msPerHour = msPerMinute * 60;
            var msPerDay = msPerHour * 24;
            var msPerMonth = msPerDay * 30;
            var msPerYear = msPerDay * 365;
            var ago = 'lalu';
            var elapsed = current - previous;
            if (elapsed < msPerMinute) {
                return Math.round(elapsed / 1000) + ' detik ' + ago;
            } else if (elapsed < msPerHour) {
                return Math.round(elapsed / msPerMinute) + ' menit ' + ago;
            } else if (elapsed < msPerDay) {
                return Math.round(elapsed / msPerHour) + ' jam ' + ago;
            } else if (elapsed < msPerMonth) {
                return Math.round(elapsed / msPerDay) + ' hari ' + ago;
            } else if (elapsed < msPerYear) {
                return Math.round(elapsed / msPerMonth) + ' bulan ' + ago;
            } else {
                return Math.round(elapsed / msPerYear) + ' tahun ' + ago;
            }
        }
        $('.timeago').each(function() {
            var timestamp = $(this).attr('datetime');
            $(this).text(timeAgo(timestamp));
        });
        //]]>
    </script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 2000
        });
    </script>

@endsection
