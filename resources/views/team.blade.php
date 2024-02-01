@extends('main')
@section("main-section")
<div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Team <strong>Members</strong></h1>
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
                        <h3 class="sub-title border-bot text-black">Get in touch</h3>
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
                    <form id="contact_form" name="contact_form" method="post" enctype="multipart/form-data" action="{{route("team")}}">
                        @csrf
                        <div class="mb-9 row">
                            <div class="col">
                                <label for="name">Team Member Name</label>
                                <input type="text" required maxlength="50" class="form-control" id="name" name="name">
                            </div>
                        <div class="mb-9 mt-2">
                            <label for="position">Designation</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                        <div class="mb-9 mt-2">
                            <label for="Image" class="form-label">Upload Display Image (1300 X 1332 px)</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary px-4 btn-lg mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection