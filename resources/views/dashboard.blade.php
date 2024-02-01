@extends('main')
@section("main-section")

<div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Admin <strong>Dashboard</strong></h1>
                    {{-- <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200"></p> --}}
                    {{-- <p><a href="portfolio.php" class="btn btn-primary">See portfolio</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlap-white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto contents py-5 pl-3 pl-lg-0 mb-0">
                <div class="bg"></div>
                <div class="row">
                    <div class="col-lg-4 mt-2">
                        <h3 class="sub-title border-bot text-black">Hello!</h3>
                    </div>
                    <div class="col-lg-8 pr-5">
                        <h2 class="section-title text-black my-0 py-0 mb-3">We build timeless architecture and
                            lavishing interiors with excellence</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section untree_co-section-4 padding-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto contents ">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-light" style="text-align:center; font-size:15px;"><a href="{{url("dashboard")}}">Dashboard</a></button>
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{url("dashboard-view")}}"> Form Responses </a> </button>
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{url("manageproject")}}"> Projects </a> </button>
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{url("manageteam")}}"> Team Members </a> </button>
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{route("logout")}}"> Logout </a> </button>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        Greetings of the day Mr. Sourabh! Let's get started with leads and management.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection