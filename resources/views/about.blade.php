@include('include.head')
 <title>Beta Logistics FZE - About us</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


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

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-dark text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">We Are Trusted Logistics Company Since 1990</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-bullseye  text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Our Mission </h5>
                            <p class="mb-0">To offer cost-effective, efficient, reliable, and fully customized logistics solutions tailored
                                to meet the diverse demands of our clients across various industries. From end-to-end
                                freight forwarding to seamless procurement, sourcing, and distribution, we provide
                                dependable service at every step of the journey.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-eye text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Our Vision</h5>
                            <p class="mb-0">To be a global logistics leader known for excellence, transparency, and innovation in
                                every shipment we handle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


     <!-- WHY DO YOU CHOOSE US?Start -->
     <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img loading="lazy" width="732" height="548" class="position-absolute img-fluid w-100 h-100" src="img/img-4.webp" style="object-fit: cover;" alt="Welcome to Beta Logistics FZE">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="mb-5 h1">WHY DO YOU CHOOSE US?</h2>
                    <p class="mb-0">
                        <ul>
                            <li>Experts in Procurement & Distribution. </li>
                            <li>Experts in all Freight Forwarding activities. </li>
                            <li>Comprehensive Service provided, right from freight, logistics,
                                custom clearance, warehousing & transportation. </li>
                            <li>Specialist in movement of mobile phones, Watches, Electronics &
                               High Value goods. </li>
                            <li>Security monitored office & warehouse. </li>
                            <li>Collective expertise of over a decade.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- WHY DO YOU CHOOSE US? End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-dark text-uppercase mb-3">Meet our team</h6>
                <p class="mb-5">Our team of highly skilled professionals combines deep industry expertise with the latest
                    technologies and best-in-class resources. This enables us to manage global shipments
                    with precision, consistency, and accountability.
                </p>
            <hr>
            </div>
            <div class="row g-4">
                {{-- <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Fadi Saeed Al Abdullah</h5>
                        <p>Managing Director </p>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class=" mt-5 mb-3">Fadi Saeed Al Abdullah</h5>
                        <p>Managing Director </p>
                        <p>Mr. Fadi is the visionary founder behind Beta Logistics FZE, bringing with him a deep 
                            passion for innovation, quality, and customer-focused solutions. He established the 
                            company in November 2022 with a clear mission: 
                        </p>
                        <p>To deliver excellence in every project. 
                            Since then, under his leadership, Beta Logistics FZE has evolved from a bold idea into 
                            a trusted name in the logistics industry, recognized for: </br>
                            ✅ Reliable, on-time service </br>
                            ✅ Strong commitment to ethical business values
                        </p>
                        <p>Mr. Fadi believes: 
                            “Success is built on trust, and trust is earned through consistent quality and integrity.” 
                            His dedication continues to drive the company forward, setting new benchmarks for 
                            professionalism and customer satisfaction.
                        </p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share fa-25"></i>
                            <span class="px-2">
                                <a href="https://www.linkedin.com/in/fadi-al-abdullah-15a829201/"><i class="fab fa-linkedin-in fa-25 px-2"></i></a>
                                <a href="fadi.alabdullah@betafzco.com"><i class="fa fa-envelope fa-25"></i></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    @include('include.footer')
</body>

</html>
