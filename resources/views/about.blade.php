@extends('main')
@section("main-section")
    <div class="untree_co-hero">
        <div class="container">
            <div class="hero-inner d-flex align-items-center">
                <div class="text">
                    <div class="intro align-self-center">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">About <strong>us</strong></h1>
                        <p data-aos="fade-up" data-aos-delay="200">Creating timeless structures that blend innovation
                            with excellence, our architectural firm turns dreams into concrete realities, transforming
                            spaces with inspired design.</p>
                    </div>
                </div>
                <div class="img-wrap" data-aos="fadep" data-aos-delay="400"
                    style="background-image: url('images/hero_1.jpg')">
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section-2 count-numbers">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="row row-2">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="100">
                                <strong class="d-block number" data-number="250">0</strong>
                                <span class="d-block caption">Number of Projects</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="200">
                                <strong class="d-block number" data-number="10">0</strong>
                                <span class="d-block caption">Year of Experience</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="300">
                                <strong class="d-block number" data-number="670">0</strong>
                                <span class="d-block caption">Number of Employees</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="400">
                                <strong class="d-block number" data-number="300"></strong>
                                <span class="d-block caption">Number of Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-overlap">
                        <div class="col-md-6 col-lg-6 mb-5" data-aos="fade-up">
                            <img src="../images/hero-3.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <p>We are a dynamic and talented team of architects dedicated to pushing the boundaries of
                                design. With our expertise in creating functional, sustainable, and aesthetically
                                pleasing spaces, we transform ideas into reality. Our commitment to excellence and
                                client satisfaction sets us apart in the architectural industry.
                            </p>
                            <p class="mt-5">
                                Choose us for our unrivaled expertise in creating exceptional architectural designs. Our
                                team's passion for innovation, attention to detail, and commitment to sustainability
                                ensure outstanding results. With a collaborative approach and a focus on client
                                satisfaction, we bring visions to life and deliver transformative spaces that stand the
                                test of time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto contents">
                    <div class="bg"></div>
                    <div class="row">
                        <div class="col-lg-4 mt-2">
                            <h3 class="sub-title border-bot text-black">Our team</h3>
                        </div>
                        <div class="col-lg-8">
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
                @foreach ($teams as $proj)
  
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mt-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="post-entry">
                        <a href="../uploads/teams/{{$proj->image}}" class="thumb"><img src="../uploads/teams/{{$proj->image}}" alt="image" class="img-fluid"></a>
                        <h2>{{$proj->name}}</h2>
                        <h3>{{$proj->position}}</h3>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
  @endsection