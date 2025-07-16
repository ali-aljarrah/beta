    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img width="252" height="111" class="img-fluid" loading="lazy" src="/img/logo-1.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ request()->is("/")? "active" : "" }}">Home</a>
                <a href="about" class="nav-item nav-link {{ request()->is("about")? "active" : "" }}">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/service" class="dropdown-item">Air Freight</a>
                        <a href="/service" class="dropdown-item">Sea Freight</a>
                        <a href="/service" class="dropdown-item">Road Freight</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Supply Chain</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/warehousing" class="dropdown-item">Warehousing</a>
                        <a href="/distribution" class="dropdown-item">Distribution</a>
                        <a href="/3rd-party-logistics" class="dropdown-item">3rd party logistics</a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blog</a>
                <a href="/news" class="nav-item nav-link">News</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/quote" class="btn btn-primary py-md-3 px-md-5 d-flex justify-content-center align-items-center">Free Quote</a>
        </div>
    </nav>
    <!-- Navbar End -->
