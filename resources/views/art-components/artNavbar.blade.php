<!-- Navbar -->
<nav class="navbar navbar-expand-lg static-top mb-5 shadow rounded"  id="nav">
    <div class="container">
        <a class="navbar-brand fw-bold text-focus-in" href={{route('art')}}>Art,silence please.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
            <a class="nav-link text-white fw-bold" href={{route('home')}}>Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white fw-bold" href={{route('about')}}>About me</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white fw-bold" href={{route('form')}}>Contact</a>
            </li>
        </ul>
        </div>
    </div>
</nav>