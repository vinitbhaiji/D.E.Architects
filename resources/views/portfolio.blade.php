@extends('main')
@section("main-section")
    <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                <div class="text text-center w-75">
                    <div class="w-100 mx-auto">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Our <strong>Portfolio</strong></h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">A curated collection showcasing our
                            diverse architectural and interior design projects. Each endeavor is a testament to our
                            commitment to innovation, precision, and the seamless fusion of form and function.</p>
                        <p><a href="#" class="btn btn-primary">Contact us</a></p>
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
                            <h3 class="sub-title border-bot text-black">Our portfolio</h3>
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
    <div class="untree_co-section untree_co-section-5">
    <div class="container">
        <div class="row">
                @foreach ($projects as $proj)
  
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mt-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="post-entry">
                        <a href="" class="thumb"><img src="../uploads/projects/{{$proj->display_image}}" alt="image" class="img-fluid"></a>
                        <h3><a href="{{route('showProject', ['id' => $proj->id])}}">{{$proj->name}}</a></h3>
                        <div class="post-meta">
                            by <b><a href="#">Mr. Sourabh</a></b>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="untree_co-section untree_co-section-5" style="padding: 0rem;">
    </div>
    @endsection