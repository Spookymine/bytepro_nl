<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <h1 class="m-0">BytePro.nl</h1>
            <!--<img src="{{ asset('assets/img/logo3.png') }}" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">BytePro</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Over Ons</a>
                        <a href="#" class="dropdown-item">Reviews</a>
                        <a href="#" class="dropdown-item">Nieuws</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Diensten</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Op Locatie</a>
                        <a href="#" class="dropdown-item">Server Management</a>
                        <a href="#" class="dropdown-item">Hardware</a>
                        <a href="#" class="dropdown-item">Server Hosting</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">Our Projects</a>
                <a href="#" class="nav-item nav-link">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Minecraft Server</a>
                        <a href="#" class="dropdown-item">404 Page</a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Support</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
