    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
            <img width="252" height="111" class="img-fluid" loading="lazy" src="{{asset('/img/logo-1.png')}}" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ request()->is("/")? "active" : "" }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->is("about")? "active" : "" }}">About</a>

                @if (!empty($menuServices) && count($menuServices) > 0)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('service/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu fade-up m-0">
                            @foreach ($menuServices as $item)
                                <a href="/service/{{$item->id}}/{{$item->slug}}" class="dropdown-item {{ request()->is("service/{$item->id}*") ? 'active' : '' }}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (!empty($menuSupply) && count($menuSupply) > 0)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('supply-chain/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Supply Chain</a>
                        <div class="dropdown-menu fade-up m-0">
                            @foreach ($menuSupply as $item)
                                <a href="/supply-chain/{{$item->id}}/{{$item->slug}}" class="dropdown-item {{ request()->is("supply-chain/{$item->id}*") ? 'active' : '' }}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <a href="/blog" class="nav-item nav-link">Blog</a>
                <a href="{{route('news')}}" class="nav-item nav-link {{ request()->is("news")? "active" : "" }}">News</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/quote" class="btn btn-primary py-md-3 px-md-5 d-flex justify-content-center align-items-center">Free Quote</a>
        </div>
    </nav>
    <!-- Navbar End -->
