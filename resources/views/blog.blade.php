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
            @if (!empty($articles) && count($articles) > 0)
                <div class="text-center mb-5">
                    <h2>Check our articles and get more knowledge with us!</h2>
                </div>
                <div class="row">
                    @foreach ($articles as $index => $article)
                        <div class="col-md-6 col-lg-4 mb-4 mx-auto wow fadeInUp" data-wow-delay="0.{{$index+1}}s">
                            <div class="service-item article-card p-4">
                                <h3 class="mb-3 h5">{{$article->title}}</h3>
                                <p>{{Str::limit($article->description, 67, '...')}}</p>
                                <a class="btn-slide mt-2 d-flex" href="/article/{{$article->id}}/{{$article->slug}}">
                                    <div class="svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                        </svg>
                                    </div>
                                    <span>Check {{Str::limit($article->title, 15, '...')}}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-ld-12 my-5">
                        <div class="justify-content-center mt-5 d-flex">
                            {{$articles->links(data: ['scrollTo' => false])}}
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center mb-5">
                    <h2>There is no articles yet!</h2>
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
