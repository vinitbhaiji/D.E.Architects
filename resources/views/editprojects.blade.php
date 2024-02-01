@extends('main')
@section("main-section")
<div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Projects <strong>Updation</strong></h1>
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
                        <form id="contact_form" name="contact_form" method="post" enctype="multipart/form-data"
                            action="{{route('projectUpdate',['id'=>$team->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-9 row">
                                <div class="col">
                                    <label for="name"> Name</label>
                                    <input type="text" required maxlength="50" class="form-control" id="name"
                                        name="name" value="{{$team->name}}">
                                </div>
                            </div>
                            <div class="mb-9 mt-2">
                                <label for="description">Descritption</label>
                                <input type="textarea" class="form-control" id="description" name="description"
                                    value="{{$team->description}}">
                            </div>
                            <div class="mb-9 mt-2">
                                <div class="mb-9 mt-2">
                                    <label for="Image" class="form-label">Upload Display Image (1300 X 1332 px)</label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        value="{{$team->display_image}}">
                                </div>
                                <label for="image1">Image 1</label>
                                <input class="form-control" id="image" name="image1" type="file" value="{{$team->image1}}">
                            </div>
                            <div class="mb-9 mt-2">
                                <label for="image2">Image 2</label>
                                <input class="form-control" id="image" name="image2" type="file" value="{{$team->image2}}">
                            </div>
                            <div class="mb-9 mt-2">
                                <label for="image3">Image 3</label>
                                <input class="form-control" id="image" name="image3" type="file" value="{{$team->image3}}">
                            </div>
                            <div class="mb-9 mt-2">
                                <label for="ifile">Image 4</label>
                                <input class="form-control" id="image" name="image4" type="file" value="{{$team->image4}}">
                            </div>
                            <button type="update" class="btn btn-primary px-4 btn-lg mt-5">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection