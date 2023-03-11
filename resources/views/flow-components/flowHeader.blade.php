
<!-- Header with Navbar -->
        <header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top rounded">
                <div class="container">
                    <a class="navbar-brand" href={{route('home')}}>
                        <img src="/img/pexels-lalesh-aldarwish-167964.jpg" alt="Logo" height="50"  class="border-dark rounded">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href={{route('home')}}>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{route('home')}}>Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href={{route('home')}} id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href={{route('home')}}><i class="bi bi-facebook"></i>Facebook</a></li>
                                    <li><a class="dropdown-item" href={{route('home')}}><i class="bi bi-instagram"></i>Instagram</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href={{route('home')}}><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
                                    <li><a class="dropdown-item" href={{route('home')}}><i class="bi bi-google"></i>Google</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/video/pexels-cottonbro-7319405.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="container h-100 fadeInLeft">
                <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Flow</h1>
                    <h2 class="lead mb-0">The Best Artist.</h2>
                </div>
                </div>
            </div>


        </header>
        <!-- End Header -->
