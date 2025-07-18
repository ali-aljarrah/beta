@include('include.head')
 <title>Beta Logistics FZE - {{$article->title}}</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{$article->title}}</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4">{{$article->description}}</h2>

                    <div>
                        {!! Str::markdown($article->content) !!}
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
