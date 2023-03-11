<x-base>
    

    <header>

            
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/video/aereo.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="container h-100">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-md navbar-light bg-light bg-opacity-75 rounded" data-aos="zoom-in-up">
                    <div class="container">
                        <a class="navbar-brand" href={{route('home')}}>Home</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <a class="nav-link ms-3" href={{route('pricing')}} aria-expanded="false">
                                Travel Now!
                            </a>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href={{route('pricing')}} id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Social
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href={{route('travel')}}><i class="bi bi-facebook"></i>Facebook</a></li>
                                        <li><a class="dropdown-item" href={{route('travel')}}><i class="bi bi-instagram"></i>Instagram</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href={{route('travel')}}><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
                                        <li><a class="dropdown-item" href={{route('travel')}}><i class="bi bi-google"></i>Google</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Not Just a Travel</h1>
                    <p class="lead mb-0"> <a href={{route('pricing')}}>What are you waiting for?</a></p>
                </div>
                </div>
            </div> 
        
    </header>
    <!-- Page Content  CLIENT-->
    <main>
        <x-travelCustomers></x-travelCustomers>
    </main>


    {{-- Travel Footer --}}
    <x-travelFooter></x-travelFooter>

</x-base>
