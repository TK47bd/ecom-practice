<div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5 py-3 align-items-center">
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-start">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                <h2 class="mb-0">+01234-56789</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex align-items-center justify-content-center">
                <a href="{{ url('/') }}" class="navbar-brand ms-lg-5">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Magic</span>WOrld</h1>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-end">
                @include('contents.userLog')
                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex d-lg-none">
        <h1 class="m-0 display-4 text-secondary"><span class="text-white">Magic</span>WOrld</h1>
    </a>

    <div class="d-flex d-lg-none">
        @include('contents.userLog')
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Service</a>
            <a href="product.html" class="nav-item nav-link">Product</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">The Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->