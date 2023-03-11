<x-gallery>


            <!-- Navbar -->
            <x-artNavbar></x-artNavbar>


            {{-- Title --}}
            <h1 class="text-white text-focus-in" id="h1">"Art shakes the dust accumulated in daily life from the soul."  <strong>Pablo Picasso</strong></h1>
            
            {{-- Scroll Helper --}}
            <div id="scrollmd"> </div>

            {{-- Explore Art Button --}}
            <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <a href="#art" class="text-white text-focus-in" id="explorebtn"> Explore it. </a>
                </div>
            </div>
            
            {{-- Scroll Helper --}}
            <div id="scrollxl"> </div>


            {{-- Container for Art Images--}}
            <x-artBox></x-artBox>


            {{-- Footer --}}
            <x-artFooter></x-artFooter>


</x-gallery>
