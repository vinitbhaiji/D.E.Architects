@extends('main')
@section("main-section")
    <div class="untree_co-hero">
        <div class="container">
            <div class="hero-inner d-flex align-items-center">
                <div class="text">
                    <div class="intro">
                        <p data-aos="fade-up" data-aos-delay="200">
                            Creating timeless structures that blend innovation with
                            excellence, our architectural firm turns dreams into concrete
                            realities, transforming spaces with inspired design.
                        </p>
                    </div>
                    <div class="heading">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-5">
                            We are <br />Dimension Espace<strong> Architects</strong>, and
                            <strong>we shape Dream</strong> Spaces.
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="200">
                            <a href="{{url('about')}}" class="btn btn-primary mr-2">About us</a><a href="{{url("services")}}"
                                class="btn btn-secondary">Our
                                services</a>
                        </p>
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
                                <strong class="d-block number" data-number="300">0</strong>
                                <span class="d-block caption">Number of Projects</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="120">
                                <strong class="d-block number" data-number="7">0</strong>
                                <span class="d-block caption">Year of Experience</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="140">
                                <strong class="d-block number" data-number="5">0</strong>
                                <span class="d-block caption">Number of Employees</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter" data-aos="fade-up" data-aos-delay="160">
                                <strong class="d-block number" data-number="300"></strong>
                                <span class="d-block caption">Number of Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-overlap">
                        <div class="col-md-6 col-lg-6 mb-5" data-aos="fade-up">
                            <img src="images/hero-3.png" alt="Image" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <p>
                                We are a dynamic team of skilled architects dedicated to pushing the boundaries of architecture. Our expertise transforms concepts into visually stunning, eco-friendly, and functional spaces. 
                            </p>
                            <p class="mb-4">
                                With a strong commitment to sustainability, creativity, and attention to detail, we guarantee outstanding results. Choose us for transformative and enduring settings, crafted collaboratively with a focus on client happiness.
                            </p>
                            <p><a href="{{url("about")}}" class="btn btn-primary">About us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section untree_co-section-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto contents">
                    <div class="row mb-5">
                        <div class="col-lg-3 mt-2" data-aos="fade-up" data-aos-delay="0">
                            <h3 class="sub-title border-bot text-black">Our services</h3>
                        </div>
                        <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="section-title text-black my-0 py-0 mb-3">
                                We build timeless architecture and lavishing interiors with excellence
                            </h2>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="service">
                                <span class="flaticon-architect-2"></span>
                                <h3><a href="{{url("interior")}}">Interior Consultancy</a></h3>
                                <p>
                                    With our creative touch, we can elevate your living spaces
                                    and create interior environments that perfectly capture your
                                    individuality and sense of style.
                                </p>
                                <p><a href="{{url("interior")}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service">
                                <span class="flaticon-architect-3"></span>
                                <h3><a href="{{url("architectural")}}">Architectural Consultancy</a></h3>
                                <p>
                                    We create architectural wonders that inspire, endure, and
                                    withstand the test of time by skillfully combining
                                    aesthetics and functionality.
                                </p>
                                <p><a href="{{url("architectural")}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service">
                                <span class="flaticon-architecture"></span>
                                <h3><a href="{{url("management")}}">Project Management Consultancy</a></h3>
                                <p>
                                    We optimise resources and deadlines for your peace of mind,
                                    ensuring every project is successful from conception to
                                    completion through our rigorous planning.
                                </p>
                                <p><a href="{{url("management")}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="service">
                                <span class="flaticon-architect-6"></span>
                                <h3><a href="{{url("legal")}}">Legal Building Permission</a></h3>
                                <p>
                                    Get professional advice and insights for your building
                                    project, utilising our experience to control expenses,
                                    expedite the procedure, and guarantee high-quality results.
                                </p>
                                <p><a href="{{url("legal")}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service">
                                <span class="flaticon-architect"></span>
                                <h3><a href="{{url("realestate")}}">Real Estate Advisory</a></h3>
                                <p>
                                    Harness our industry expertise and strategic insights to make informed real estate
                                    decisions, whether
                                    you're buying, selling, or investing in properties, ensuring your financial goals
                                    are met.
                                </p>
                                <p><a href="{{url('realestate')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service">
                                <span class="flaticon-architect-7"></span>
                                <h3><a href="{{url("turnkey")}}">Turnkey with Material Projects</a></h3>
                                <p>
                                    Leave the heavy lifting to us. Our professional installation
                                    services cover a wide range of needs, ensuring your projects
                                    are completed with precision and finesse.
                                </p>
                                <p><a href="{{url("turnkey")}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5" data-aos="fade-up" data-aos-delay="0">
                        <div class="col-lg-4">
                            <a href="{{url("services")}}" class="btn btn-primary">Our services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container greyline">
        <div class="bg-project"></div>
        <div class="bg-black d-lg-flex" data-aos="fade-up" data-aos-delay="0">
            <div class="img order-1 order-lg-2">
                <div class="owl-carousel owl-single">
                    <div class="item">
                        <img src="images/project_4.jpg" alt="Image" class="img-fluid" />
                    </div>
                    <div class="item">
                        <img src="images/project_1.jpg" alt="Image" class="img-fluid" />
                    </div>
                    <div class="item">
                        <img src="images/project_2.png" alt="Image" class="img-fluid" />
                    </div>
                    <div class="item">
                        <img src="images/project_3.png" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="200">
                <h2 class="section-subtitle">Projects</h2>
                <div class="owl-single-text owl-carousel">
                    <div class="item">
                        <h3 class="mb-4">Retro Design</h3>
                        <p>
                            Located in the vibrant setting of Qureshi Villa, near Signal Vihar on Colonel Academy Road in Mhow, stands a remarkable property owned by the discerning client, Sharukh Qureshi. The plot, generously sized at 44' x 85', boasts a total area of 3740 sqft, providing ample space for a meticulously designed home. The architectural masterpiece spans 2780 sqft, showcasing a captivating retro design that adds a touch of timeless elegance to the surroundings.
                        </p>
                        <ul class="list-unstyled">
                            <li></li>
                        </ul>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary">See Case Study</a>
                        </p>
                    </div>
                    <div class="item">
                        <h3 class="mb-4">Retro Design</h3>
                        <p>
                            This residence not only reflects the owner's refined taste but also stands as a testament to the fusion of classic aesthetics and modern functionality. The strategic location near Signal Vihar ensures convenient access to amenities, making it an ideal abode for a sophisticated lifestyle. Sharukh Qureshi's residence at Colonel Academy Road is more than just a house; it is a symbol of tasteful living and architectural excellence.
                        </p>
                        <ul class="list-unstyled">
                            <li></li>
                        </ul>
                        <p class="mt-5">
                            <a href="{{url("portfolio")}}" class="btn btn-primary">See Case Study</a>
                        </p>
                    </div>
                    <div class="item">
                        <h3 class="mb-4">Morden Contemporary</h3>
                        <p>
                            Nestled in the heart of Shiv Palace Colony, Limbode, Indore, Mr. Lokendra Verma Ji's residence is a modern masterpiece that seamlessly blends style and functionality. The compact yet thoughtfully designed plot, measuring 15' x 50', encompasses a total area of 750 sqft. The striking feature of this property is the impressive build-up area of 1750 sqft, showcasing a commitment to maximizing space and utility. 
                        </p>
                        <ul class="list-unstyled">
                            <li></li>
                        </ul>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary">See Case Study</a>
                        </p>
                    </div>
                    <div class="item">
                        <h3 class="mb-4">Morden Contemporary</h3>
                        <p>
                            The design style chosen for this elegant dwelling is Modern Contemporary, reflecting the latest trends and a tasteful aesthetic. Located at Sajjan Bhavan in Shiv Palace Colony, the residence not only offers a comfortable living space but also situates itself in a convenient and desirable locale. Mr. Lokendra Verma Ji's residence is a testament to contemporary living, where innovative design meets the demands of a modern lifestyle, creating a harmonious and stylish abode in the vibrant city of Indore.
                        </p>
                        <ul class="list-unstyled">
                            <li></li>
                        </ul>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary">See Case Study</a>
                        </p>
                    </div>
                </div>
                <div class="owl-navigtion mt-4 d-flex align-items-center">
                    <div>
                        <a href="#" class="prev js-custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
                        <a href="#" class="next js-custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
                    </div>
                    <div class="ml-auto">
                        <span class="total-count mx-2">
                            <span class="owl-current">1</span> /
                            <span class="owl-total"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section untree_co-section-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="testimonial-v2 light">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid" />
                        <blockquote>
                            Separated they live in. Separated they live in Bookmarksgrove
                            right at the coast of the Semantics, a large language ocean.
                        </blockquote>
                        <cite> James Anderson </cite>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-v2 light">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid" />
                        <blockquote>
                            Separated they live in. Separated they live in Bookmarksgrove
                            right at the coast of the Semantics, a large language ocean.
                        </blockquote>
                        <cite> James Anderson </cite>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-v2 light">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid" />
                        <blockquote>
                            Separated they live in. Separated they live in Bookmarksgrove
                            right at the coast of the Semantics, a large language ocean.
                        </blockquote>
                        <cite> James Anderson </cite>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection