<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakitin.id</title>
    <link rel="icon" href="{!! asset('asset/logo/logotitle.png') !!}">
    <link rel="icon" href="/logo/logotitle.png" type="image/icon">
    <link rel="stylesheet" type="text/css" href="{!! asset('/asset/style.css') !!}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        #poto:hover .image {
            opacity: 0.3;
        }

        .image {
            opacity: 1;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .video-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .video-container::after {
            padding-top: 75%;
            display: block;
            content: '';
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body style="background-color: black">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 text-white">
        <div class="container">
            <div class="navbar-brand">
                <a href="/" class="navbar-brand">
                    <img src="{!! asset('asset/logo/logoputih.png') !!}" alt="Logo Rakitin.id" width="200" height="48">
                </a>
            </div>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"
                aria-expanded="false" aria-label="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-btn" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/viewproject" class="nav-link text-white">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contactme" class="nav-link text-white">Contact Me</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    @yield('content')
    <section class="footer bg-dark">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-2 g-3 py-5 text-white">
                <div class="col-md-6 col-lg-3">
                    <h5>Get Me!</h5>
                    <p>Jl. Swadaya No.50, RT.003/RW.005, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat
                        17113</p>
                </div>
                <div class="col-md-6 col-lg-3">

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <form>
                        <h5>Mail Me</h5>
                        <p>You can Mail Me Down Here!</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Message">
                            <button class="btn btn-primary" type="button" style="width: 100px"><a
                                    href="mailto:2010631170003@student.unsika.ac.id"
                                    style="text-decoration: none; color:white ">Send</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-between border-top text-white">
                <p>© 2022 Rakitin.id. All rights reserved create by Arya Maulana Kurniawan</p>
                <ul class="list-unstyled d-flex sosmed">
                    <li class="ms-3">
                        <a href="https://www.instagram.com/yudha_yulinsyar/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="https://www.facebook.com/yudha.yulinsyar" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="https://www.youtube.com/channel/UCxkZ2PfLINU4UbNSq50qwRg" target="_blank"><i
                                class="bi bi-youtube"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="mailto:onestorage.id@gmail.com"><i class="bi bi-envelope-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="/asset/script.js"></script>
</body>

</html>
