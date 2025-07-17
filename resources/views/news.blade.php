@include('include.head')
 <title>Beta Logistics FZE - News</title>
</head>

<body>
  @include('include.loader')
  @include('include.menu')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">News</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <section class="py-3">
        <div class="container">
            @if (!empty($news) && count($news) > 0)
                <div class="text-center mb-5">
                    <h2>Stay tuned with our news!</h2>
                </div>
                <div class="row">
                    @foreach ($news as $index => $item)
                        <div class="col-lg-6 mb-4 mx-auto wow fadeIn" data-wow-delay="0.{{$index+1}}s">
                            <div class="news-block">
                                <div class="border-bottom p-2 mb-3">
                                    <h5 class="mb-1">{{$item->title}}</h5>
                                </div>
                                <div>
                                    <p>
                                       {{$item->description}}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <div class="col-ld-12 my-5">
                        <div class="justify-content-center mt-5 d-flex">
                            {{$news->links(data: ['scrollTo' => false])}}
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center mb-5">
                    <h2>There's no news yet!</h2>
                </div>
            @endif
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
