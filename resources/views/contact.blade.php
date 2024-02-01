@extends('main')
@section("main-section")
    <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                <div class="text text-center w-75">
                    <div class="w-100 mx-auto">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">Contact <strong>us</strong></h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Connect with us to turn your dreams
                            into architectural realities. Reach out for a consultation, and let's begin the journey of
                            crafting spaces that inspire.</p>
                        <p><a href="portfolio.php" class="btn btn-primary">See portfolio</a></p>
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
                <div class="col-lg-9 mx-auto contents ">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <form class="contact-form" data-aos="fade-up" data-aos-delay="200" method="POST" action="{{url("contact")}}">
                              @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class for="fname">First name</label>
                                            <input type="text" class="form-control" id="fname" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class for="lname">Last name</label>
                                            <input type="text" class="form-control" id="lname" name="lname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class for="number">Contact Number</label>
                                    <input type="text" class="form-control" id="number" name="number" required>
                                </div>
                                <div class="form-group">
                                    <label class for="message">Message</label>
                                    <textarea class="form-control" id="message" cols="30" rows="5" name="message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                        <div class="col-lg-5 text-center">
                          <div class="widget">
                            <h3 style="color: black"><b>Contact</b></h3>
                            <span>Ar. Sourabh Verma</span><br>
                            <ul class="list-unstyled links mb-4">
                                <li><a href="tel:8770557298">+91 877-055-7298</a></li>
                                <!-- <li><a href="tel://11234567890">+1(123)-456-7890</a></li> -->
                                <li>
                                    <a href="mailto:Dimension.escape@gmail.com">Dimension.escape@gmail.com</a>
                                </li>
                            </ul>
                            <address>104 Ashish Nagar, Near Bengali Square, Indore, M.P.</address>
                            <h4 style="color: black"><b>Connect us</b></h4>
                            <ul class="list-unstyled social" style="display:flex; padding-right:10px;">
                                <li>
                                    <a href="#"><span class="icon-instagram" style="padding-right: 20px; padding-left: 110px"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-twitter"style="padding-right: 20px"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-facebook"style="padding-right: 20px"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.3459087348087!2d75.90692407520227!3d22.71538097939024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962e3dbef6821f7%3A0x7e4ca84e1615596!2sDimension%20Espace%20Architects!5e0!3m2!1sen!2sin!4v1703677101680!5m2!1sen!2sin" width="100%" height="500px" style="border:0; margin-bottom:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  @endsection