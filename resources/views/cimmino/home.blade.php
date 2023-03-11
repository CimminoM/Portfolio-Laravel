<x-main>
    {{-- Header --}}
    <header>
    {{-- Navbar --}}
        <div class="container">
            <x-navbar>
            </x-navbar>
        </div>


    {{-- Video Home --}}
        <div class="container mb-5">
            <div class="row zoomIn2">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="/video/production ID_4884241.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </header>

    
    {{--About me--}}
    <x-about>
    </x-about>


    <!-- Projects-->
    <x-projects></x-projects>


    {{-- Contact me --}}
    <x-contact>
    </x-contact>


    {{-- Footer --}}
    <x-footer>
    </x-footer>
</x-main>