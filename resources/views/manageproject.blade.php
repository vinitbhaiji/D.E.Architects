@extends('main')
@section("main-section")

<div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4"><strong>Projects</strong></h1>
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
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{url("manageteams")}}"> Team Members </a> </button>
                            <button type="button" class="btn btn-light" style="text-align: center; font-size:15px;"><a href="{{route("logout")}}"> Logout </a> </button>
                        </div>
                    </div>
                    <div class="col-lg-9" style="overflow: scroll">
                        <table class="table">
                            <thead>
                                <tr style="position: sticky">
                                    <th>Project Name</th>
                                    <th>Project Description </th>
                                    <th>Display Image</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Image 4</th>
                                    <th>Image 5</th>
                                    <th>Image 6</th>
                                    <th>Image 7</th>
                                    <th>Image 8</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $single)
                                    <tr>
                                        <td>{{$single->name}}</td>
                                        <td>{{$single->description}}</td>
                                        <td>{{$single->display_image}}</td>
                                        <td>{{$single->image1}}</td>
                                        <td>{{$single->image2}}</td>
                                        <td>{{$single->image3}}</td>
                                        <td>{{$single->image4}}</td>
                                        <td>{{$single->image5}}</td>
                                        <td>{{$single->image6}}</td>
                                        <td>{{$single->image7}}</td>
                                        <td>{{$single->image8}}</td>
                                        <td>
                                            <button class="btn-danger"><a href="{{url('manageproject', ['id' => $single->id])}}" style="color: white">Delete</a></button>
                                            <button class="btn-primary"><a href="{{url('editprojects', ['id' => $single->id])}}" style="color: white">Edit</a></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="form-control"><a href="{{url('project')}}">Add More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection