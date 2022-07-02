@extends('layout.navbar')

@section('content')
    <div class="container-fluid text-white bg">
        <div class="container">
            <h1 style="text-decoration: underline; font-size:50px; font-weight: 600">Contact</h1>
            <li style="font-size: 20px; list-style-type:none"><i class="bi bi-envelope" style="font-size: 25px"></i>
                onestorage.id@gmail.com</li>
            <li style="font-size: 20px; list-style-type:none"><i class="bi bi-whatsapp" style="font-size: 25px"></i>
                +62 812-8695-2469</li>
            <li style="font-size: 20px; list-style-type:none"><i class="bi bi-instagram" style="font-size: 25px"></i>
                yudha_yulinsyar</li>
        </div>
        <div class="container">
            <br>
        </div>
        <div class="container">
            <h1 style="text-decoration: underline; font-size:50px; font-weight: 600">Office</h1>
            <p style="font-size: 20px">Jl. Swadaya No.50, RT.003/RW.005, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat
                17113</p>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=700&amp;height=450&amp;hl=en&amp;q=rakitin.id&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href="https://mcpepro.com/">MCPEPRO</a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>
    </div>
@endsection
