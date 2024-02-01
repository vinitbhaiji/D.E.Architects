@extends('main')
@section("main-section")

<div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Team<strong> Members</strong></h1>
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
                        <table class="table" style="max-height:300px; overflow-y:scroll">
                            <thead>
                                <tr style="position: sticky">
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Designation </th>
                                    <th>Display Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $single)
                                    <tr>
                                        <td>{{$single->id}}</td>
                                        <td>{{$single->name}}</td>
                                        <td>{{$single->position}}</td>
                                        <td>{{$single->image}}</td>
                                        <td>
                                            <button class="btn-danger"><a href="{{url('manageteams', ['id' => $single->id])}}" style="color: white">Delete</a></button>
                                            <button class="btn-primary"><a href="{{url('edit', ['id' => $single->id])}}" style="color: white">Edit</a></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="form-control"><a href="{{url('team')}}">Add More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection