@include('include.head')
 <title>Beta Logistics FZE</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">

                                <h1 class="display-3 text-white animated slideInDown mb-4">WE ARE <span class="text-primary">BETA FZE Logistics</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Global Freight Forwarding & Logistics Solutions You Can Trust
                                </p>
                                <a href="/about" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-1 animated slideInLeft">Read More</a>
                                <a href="/quote" class="btn btn-dark py-md-3 px-md-5 rounded-1 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    Welcome to Beta Logistics FZE
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                   Beta Logistics FZE, headquartered in Dubai, is a dynamic international logistics company committed to delivering world-class logistics
                                </p>
                                <a href="/about" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-1 animated slideInLeft">Read More</a>
                                <a href="/quote" class="btn btn-dark py-md-3 px-md-5 rounded-1 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    @if (!empty($news) && count($news) > 0)
        <!-- News Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">Latest News</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ($news as $item)
                                <div class="testimonial-item p-4 my-5">
                                    <div class="border-bottom p-4 mb-4">
                                        <h5 class="text-primary mb-1">{{$item->title}}</h5>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <p>
                                            {{$item->description}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-12 mx-auto wow fadeIn text-center py-3" data-wow-delay="0.3s">
                        <a href="{{route('news')}}" class="btn btn-dark py-md-3 px-md-5 me-3 rounded-1 animated slideInLeft">See All News</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- News End -->
    @endif

    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-5 h1">Global Freight Forwarding & Logistics Solutions You Can Trust</h2>
                    <p class="mb-3">
                        At BETA FZE Logistics, we specialize in providing reliable, cost-effective, and tailor-made
                        international freight forwarding and cargo transportation services. Whether you're importing or
                        exporting, our end-to-end logistics solutions are designed to meet your business goals with
                        precision and speed.
                    </p>
                    <p class="mb-3">
                       We understand the importance of every shipment — and its impact on your supply chain. That’s
                        why we treat each cargo as a priority, offering optimized shipping solutions across air, sea, and
                        land routes.
                    </p>
                    <p class="mb-3">
                        Our expert team leverages the latest technology and a global network of partners to ensure fast,
                        secure, and efficient delivery
                    </p>
                    <p class="mb-3">
                        Your logistics, powered by experience, speed, and trust.
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary rounded-1 p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <a class="text-primary fw-bold h5" href="tel:+97142322877">+971 4 232 2877</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-dark rounded-1 p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary rounded-1 p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success rounded-1 p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img loading="lazy" width="732" height="548" class="position-absolute img-fluid w-100 h-100" src="img/img-1.webp" style="object-fit: cover;" alt="Welcome to Beta Logistics FZE">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-dark text-uppercase mb-3">About Us</h6>
                    <h2 class="mb-5 h1">Welcome to Beta Logistics FZE</h2>
                    <p class="mb-3">
                        Beta Logistics FZE, headquartered in Dubai, is a dynamic international logistics
                        company committed to delivering world-class logistics and supply chain solutions with
                        precision, reliability, and integrity.
                    </p>
                    <p class="mb-3">
                        As experienced international freight forwarders, our mission is to provide exporters and
                        importers with top-tier logistics services. Every shipment we handle is approached as a
                        unique challenge and an opportunity to deliver excellence. We take pride in identifying
                        and implementing the most optimal transportation solutions tailored to each client's
                        specific needs.
                    </p>
                    <p class="mb-3">
                      At BETA, we understand the critical role logistics plays in your business. We recognize
                        the trust you place in us, and we honor that trust by ensuring your cargo moves swiftly,
                        safely, and efficiently to its destination. Whether it's a single shipment or a
                        comprehensive supply chain solution, we treat every project with urgency and care.
                    </p>

                    <a href="/about" class="btn btn-dark rounded-1 py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @if (!empty($services) && count($services) > 0)
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-dark text-uppercase">Our Services</h2>
                    <p class="mb-5">
                        At Beta Logistics FZE, we offer a comprehensive range of logistics and supply chain
                        solutions designed to move your cargo swiftly, securely, and cost-effectively—across
                        borders and industries. Explore our core services below
                    </p>
                </div>
                <div class="row g-4">
                    @foreach ($services as $index => $service)
                        <div class="col-md-6 col-lg-4 wow fadeInUp mx-auto" data-wow-delay="0.{{$index+2}}s">
                            <div class="service-item p-4">
                                <h4 class="mb-3">{{$service->title}}</h4>
                                <p>
                                    {{Str::limit($service->description, 150, '...')}}
                                </p>
                                <a class="btn-slide mt-2 d-flex" href="/service/{{$service->id}}/{{$service->slug}}">
                                    <div class="svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                        </svg>
                                    </div>
                                    <span>Check {{$service->title}}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->
    @endif


    @include('include.faqs', ['faqs' => $faqs])

    <section class="py-5">
        <div class="container">
            <div class="text-center wow slideInUp">
                <p class="h1 fw-bold mb-5">
                    Get a Quote Now!
                </p>
                <a class="btn btn-primary py-md-3 px-md-5 rounded-3 d-block w-fit mx-auto" href="/quote">Free Quote</a>
            </div>
        </div>
    </section>

     @include('include.footer')
</body>

</html>
