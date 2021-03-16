@extends('layout.landing')

@section('title')

@section('content')

<div class="container-fluid headd" id="beranda">
    <div class="container pt-5">
        <header>
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="mt-5">
                        <div class="row">
                            <div class="col">
                                <h5>Hai, Saya Vernanda Septia Wanandi</h5>
                                <h2>Web Developer and Flutter Developer</h2>
                                <p>Saya sedang kuliah dipalcomtech dan masih berlanjut. Saya memiliki pengalaman di
                                    pengembangan
                                    UIUX
                                    Design
                                    dan Front-end. Saya selalu berusaha mempelajari sesuatu yang baru dan menganggap
                                    diri saya
                                    sebagai
                                    pembelajar. Saya ingin menjelajah diri saya dimana saya dapat memanfaatkan kemampuan
                                    saya
                                    untuk
                                    melakukan kerja keras demi kesuksesan dan niat baik organisasi. Juga saya ingin
                                    memajukan
                                    karir
                                    saya
                                    sepenuhnya.</p>
                            </div>
                        </div>
                        <div class="row justify-content-start d-flex">
                            <div class="flex-column">
                                <a href="#" class="btn bg-white shadow ml-3">Email Saya</a>
                                <div class="tautan mt-1 pl-3"><a href="#"><img src="{{asset('icons/download.svg')}}"
                                            alt=""><span
                                            style="color: white; text-decoration: none; font-size: 15px;">Unduh
                                            CV</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <a href="/link" class="btn  btn-outline-light px-4"><span
                                        class="text-center">Tautan</span></a>
                            </div>
                            <div class="col-8">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img data-aos="zoom-in-up" class="fotoprofil img-fluid" src=" {{asset('images/profil_2.png')}} "
                        alt="">
                </div>
            </div>
        </header>
    </div>
</div>

<section class="keterampilan" id="keterampilan">
    <div class="container-fluid pt-5" style="margin-bottom: 80px;">
        <div class="container">
            <section>
                <div class="container">
                    <div class="section-heading text-center">
                        <h1 data-aos="fade-down">Keterampilan</h1>
                        <p data-aos="fade-down" class="text-muted">Keterampilan dan minat saya</p>
                    </div>
                    <div class="container d-flex justify-content-around">
                        <div class="row mt-5">
                            <div class="col-xs-4 my-3 mx-5">
                                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                                    class="card text-center border-0">
                                    <img src="{{asset('images/design.png')}}" alt=""> <br>
                                    Design
                                </div>
                            </div>
                            <div class="col-xs-4 my-3 mx-5">
                                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                                    class="card text-center border-0">
                                    <img src="{{asset('images/webdev.png')}}" alt=""> <br>
                                    Web Development
                                </div>
                            </div>
                            <div class="col-xs-4 my-3 mx-5">
                                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                                    class="card text-center border-0">
                                    <img src="{{asset('images/appdev.png')}}" alt=""> <br>
                                    Flutter Development
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid" style="background-color: #BFBFBF;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                        src="{{asset('images/figma.png')}}" alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" src="{{asset('images/htm.png')}}"
                        alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" src="{{asset('images/css.png')}}"
                        alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" src="{{asset('images/js.png')}}"
                        alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" src="{{asset('images/sass.png')}}"
                        alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                        src="{{asset('images/bootstrap.png')}}" alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                        src="{{asset('images/laravel.png')}}" alt="">
                </div>
                <div class="a mx-4 my-5">
                    <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                        src="{{asset('images/flutter.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portofolio" style="margin-bottom: 80px; padding-top: 50px;">
    <div class="container-fluid">
        <div class="container">
            <div class="section-heading text-center">
                <h1 data-aos="fade-down">Portofolio</h1>
                <p data-aos="fade-down" class="text-muted">Kumpulan karya saya</p>
            </div>
            <div class="d-flex justify-content-center mt-4 mb-2">
                <ul class="nav nav-pills mb-3 d-flex flex-wrap justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/#portofolio">Semua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('design') ? 'active' : '' }}"
                            href="/design#portofolio">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('web') ? 'active' : '' }}" href="/web#portofolio">Web
                            Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('app') ? 'active' : '' }}" href="/app#portofolio">App
                            Development</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-content-start flex-wrap">
                <div class="text-center">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                        @yield('portofolio')
                    </div>


                </div>

            </div>
        </div>

    </div>


</section>

<section id="kontak" style="background-color: #1339FF;">
    <div class="container-fluid">
        <div class="container">
            <div class="text-center">
                <h1 data-aos="fade-right" style="color: white; margin-bottom: 50px; padding-top: 100px;">Apakah kamu
                    ingin <br> berbicara
                    dengan saya?</h1>
                <div data-aos="fade-left" class="hub mt-5">
                    <a class="btn btn-light px-4 mr-1" href="#"><img src="{{asset('icons/email.svg')}}" alt="">
                        Email</a>
                    <a class="btn btn-light px-3" href="#"><img src="{{asset('icons/wa.svg')}}" alt="">WhatsApp</i></a>
                </div>
                <br>
                <div data-aos="fade-right" class="sosmed" style="padding-bottom: 100px; margin-top: 80px;">
                    <a class="mx-2" href="http://"><img src="{{asset('icons/link.svg')}}" alt=""></a>
                    <a class="mx-2" href="http://"><img src="{{asset('icons/ig.svg')}}" alt=""></a>
                    <a class="mx-2" href="http://"><img src="{{asset('icons/facebook.svg')}}" alt=""></a>
                    <a class="mx-2" href="http://"><img src="{{asset('icons/github.svg')}}" alt=""></a>
                    <a class="mx-2" href="http://"><img src="{{asset('icons/linkedin.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-style')
<style>
html {
    scroll-behavior: smooth;
}

.hov:hover {
    -webkit-box-shadow: 0px 10px 47px -13px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 0px 10px 47px -13px rgba(0, 0, 0, 0.73);
    box-shadow: 0px 10px 47px -13px rgba(0, 0, 0, 0.73);
}

.headd {
    background-color: #1339FF;
    padding-bottom: 70px;
}

h5,
h2,
p {
    color: white;
}

.fotoprofil {
    width: 500px;
    height: 500px;
}

.col-3 .btn:hover {
    text-decoration: none;
    color: blue;

}
</style>
@endpush