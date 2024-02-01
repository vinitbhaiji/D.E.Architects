<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content />
    <meta name="keywords" content />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Reshape Free HTML Template by Colorlib</title>
    <script nonce="330c6cb0-6fb8-4657-9452-75683befdcd1">
        (function(w, d) {
            ! function(j, k, l, m) {
                j[l] = j[l] || {};
                j[l].executed = [];
                j.zaraz = {
                    deferred: [],
                    listeners: []
                };
                j.zaraz.q = [];
                j.zaraz._f = function(n) {
                    return async function() {
                        var o = Array.prototype.slice.call(arguments);
                        j.zaraz.q.push({
                            m: n,
                            a: o
                        })
                    }
                };
                for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                j.zaraz.init = () => {
                    var q = k.getElementsByTagName(m)[0],
                        r = k.createElement(m),
                        s = k.getElementsByTagName("title")[0];
                    s && (j[l].t = k.getElementsByTagName("title")[0].text);
                    j[l].x = Math.random();
                    j[l].w = j.screen.width;
                    j[l].h = j.screen.height;
                    j[l].j = j.innerHeight;
                    j[l].e = j.innerWidth;
                    j[l].l = j.location.href;
                    j[l].r = k.referrer;
                    j[l].k = j.screen.colorDepth;
                    j[l].n = k.characterSet;
                    j[l].o = (new Date).getTimezoneOffset();
                    if (j.dataLayer)
                        for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                ...x[1],
                                ...y[1]
                            })), {}))) zaraz.set(w[0], w[1], {
                            scope: "page"
                        });
                    j[l].q = [];
                    for (; j.zaraz.q.length;) {
                        const z = j.zaraz.q.shift();
                        j[l].q.push(z)
                    }
                    r.defer = !0;
                    for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith(
                        "_zaraz_"))).forEach((B => {
                        try {
                            j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                        } catch {
                            j[l]["z_" + B.slice(7)] = A.getItem(B)
                        }
                    }));
                    r.referrerPolicy = "origin";
                    r.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                    q.parentNode.insertBefore(r, q)
                };
                ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="lines-wrap">
        <div class="lines-inner">
            <div class="lines"></div>
        </div>
    </div>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav dark mb-5">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0">Re<strong>shape</strong> <span class="text-primary">.</span></a>
                <ul class="js-clone-nav d-none d-lg-inline-block site-menu float-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="has-children">
                        <a href="about.html">About us</a>
                        <ul class="dropdown">
                            <li><a href="elements.html">Elements</a></li>
                            <li class="has-children">
                                <a href="#">Menu Two</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Our services</a></li>
                    <li class="active"><a href="how-we-work.html">How we work?</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <a href="#"
                    class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </nav>
    <div class="untree_co-hero overlay">
        <div class="container">
            <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                <div class="text text-center w-75">
                    <div class="w-100 mx-auto">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">How <strong>we work</strong>?</h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Separated they live in.
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                            ocean.</p>
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
                            <h3 class="sub-title border-bot text-black">How we work?</h3>
                        </div>
                        <div class="col-lg-8 pr-5">
                            <h2 class="section-title text-black my-0 py-0 mb-3">Far far away, behind the word mountains,
                                far from the countries</h2>
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
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                            <div class="service">
                                <div class="number">01</div>
                                <h3><a href="#">Consultation</a></h3>
                                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics.</p>
                                <p><img src="images/consult.jpg" alt="Image" class="img-fluid"></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                            <div class="service">
                                <div class="number">02</div>
                                <h3><a href="#">Planning</a></h3>
                                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics.</p>
                                <p><img src="images/planning.jpg" alt="Image" class="img-fluid"></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                            <div class="service">
                                <div class="number">03</div>
                                <h3><a href="#">Architecture</a></h3>
                                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics.</p>
                                <p><img src="images/project_3.jpg" alt="Image" class="img-fluid"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section untree_co-section-5 pb-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7 mb-5">
                    <h2 class="section-heading text-white">Testimonials</h2>
                    <p class="text-white">Separated they live in. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-v2 light">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                        <blockquote>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                            the Semantics, a large language ocean.</blockquote>
                        <cite>
                            James Anderson
                        </cite>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-v2 light">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        <blockquote>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                            the Semantics, a large language ocean.</blockquote>
                        <cite>
                            James Anderson
                        </cite>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-v2 light">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <blockquote>Separated they live in. Separated they live in Bookmarksgrove right at the coast of
                            the Semantics, a large language ocean.</blockquote>
                        <cite>
                            James Anderson
                        </cite>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Home</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Colorlib</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Practice Area</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Attorneys</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Practice Area</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Architect</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Colorlib</a></li>
                            <li><a href="#">Free Templates</a></li>
                            <li><a href="#">WordPress Themes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Colorlib</a></li>
                            <li><a href="#">House Renovation</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Installation Works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a
                                    href="https://preview.colorlib.com/cdn-cgi/l/email-protection#e38a8d858ca38e9a878c8e828a8dcd808c8e"><span
                                        class="__cf_email__"
                                        data-cfemail="20494e464f604d59444f4d41494e0e434f4d">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>

                        Copyright &copy;
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                            target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/custom.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"81a4ea69bc028a02","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>
</html>
