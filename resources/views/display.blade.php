@extends('main')
@section('main-section')
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="untree_co-hero overlay" style="background-image: url('../images/hero_1.jpg')">
    <div class="container">
        <div class="hero-inner text-center d-flex align-items-center justify-content-center">
            <div class="text text-center w-75">
                <div class="w-100 mx-auto">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Our <strong>Projects</strong></h1>
                    <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Connect with us to turn your dreams
                        into architectural realities. Reach out for a consultation, and let's begin the journey of
                        crafting spaces that inspire.</p>
                    <p><a href="{{url('portfolio')}}" class="btn btn-primary">See portfolio</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto contents py-5 pl-3 pl-lg-0 mb-0">
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
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                </div>
        
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../uploads/projects/{{$proj->image1}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image2}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image3}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image4}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image5}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image6}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image7}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                  <img src="../uploads/projects/{{$proj->image8}}" alt="Project Image" class="d-block" style="width:100%">
                </div>
              </div>
    
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
                <div class="container">
                  <h2 style=" margin-top:10px;color:black">{{$proj->name}}</h2>
                  <p>{{$proj->description}}</p>
                </div>
            </div>
          </div>
        </div>
      </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection