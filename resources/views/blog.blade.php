@include('include.head')
 <title>Beta Logistics FZE - Blog</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-3">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Check our articles and get more knowledge with us!</h2>
            </div>
            <div class="row">
                 <div class="col-md-6 col-lg-3 mb-4 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item article-card p-4">
                        <h3 class="mb-3">Article Title</h3>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2 d-flex" href="/article">
                            <div class="svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </div>
                            <span>Check </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
