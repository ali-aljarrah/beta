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
                        <div class="p-3 rounded-1 bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-headphones" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
                            </svg>
                        </div>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <a class="text-primary fw-bold h5" href="tel:{{App\Models\CompanyInformation::getInfoValue('phone') ?? '#'}}">{{App\Models\CompanyInformation::getInfoValue('phone') ?? '#'}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-dark rounded-1 p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-people-fill mb-3" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                                <h2 class="text-white mb-2" data-toggle="counter-up">20340</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary rounded-1 p-4 wow fadeIn" data-wow-delay="0.5s">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-rocket-fill mb-3" viewBox="0 0 16 16">
                                    <path d="M10.175 1.991c.81 1.312 1.583 3.43 1.778 6.819l1.5 1.83A2.5 2.5 0 0 1 14 12.202V15.5a.5.5 0 0 1-.9.3l-1.125-1.5c-.166-.222-.42-.4-.752-.57-.214-.108-.414-.192-.627-.282l-.196-.083C9.7 13.793 8.85 14 8 14s-1.7-.207-2.4-.635q-.101.044-.198.084c-.211.089-.411.173-.625.281-.332.17-.586.348-.752.57L2.9 15.8a.5.5 0 0 1-.9-.3v-3.298a2.5 2.5 0 0 1 .548-1.562l.004-.005L4.049 8.81c.197-3.323.969-5.434 1.774-6.756.466-.767.94-1.262 1.31-1.57a3.7 3.7 0 0 1 .601-.41A.55.55 0 0 1 8 0c.101 0 .17.027.25.064q.056.025.145.075c.118.066.277.167.463.315.373.297.85.779 1.317 1.537M9.5 6c0-1.105-.672-2-1.5-2s-1.5.895-1.5 2S7.172 8 8 8s1.5-.895 1.5-2"/>
                                    <path d="M8 14.5c.5 0 .999-.046 1.479-.139L8.4 15.8a.5.5 0 0 1-.8 0l-1.079-1.439c.48.093.98.139 1.479.139"/>
                                </svg>
                                <h2 class="text-white mb-2" data-toggle="counter-up">350</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success rounded-1 p-4 wow fadeIn" data-wow-delay="0.7s">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-star-fill mb-3" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <h2 class="text-white mb-2" data-toggle="counter-up">871</h2>
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
