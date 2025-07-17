@include('include.head')
 <title>Beta Logistics FZE - {{$service->title}}</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{$service->title}}</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <section>
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft mb-5 mb-lg-0" data-wow-delay="0.1s">
                    <div class="text-center">
                        <img loading="lazy" width="457" height="343" class="img-fluid shadow-lg rounded-3" src="{{asset('img/img-2.webp')}}" style="object-fit: cover;" alt="{{env('APP_NAME')}} - {{$service->title}}">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInRight" data-wow-delay="0.3s">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                        <p class="">{{$service->description}}</p>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- Service End -->

    <section class="bg-light my-5">
        <div class="container py-5">
             <div class="row">

                <div class="col-lg-5 about-text wow fadeInLeft mb-5 mb-lg-0" data-wow-delay="0.3s">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-start">
                           {!! Str::markdown($service->content) !!}
                    </div>
                </div>
                  <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="text-center">
                        <img loading="lazy" width="505" height="284" class="img-fluid shadow-lg rounded-3" src="{{asset('img/img-3.webp')}}" style="object-fit: cover;" alt="{{env('APP_NAME')}} - {{$service->title}}">
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
                <a class="btn btn-primary py-md-3 px-md-5 rounded-1 d-block w-fit mx-auto" href="/quote">Free Quote</a>
            </div>
        </div>
    </section>

     @include('include.footer')
</body>

</html>
