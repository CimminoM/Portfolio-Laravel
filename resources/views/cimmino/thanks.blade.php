<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite (['resources/css/app.css'], ['resources/js/app.js'])
        <title>Thank You!

        </title>
    </head>
    <body>
        {{-- Navbar --}}
        <x-navbar></x-navbar>

        <div class="container">
            <div class="row">
                <h1 class="text-center">Grazie per il tuo <span class="border rounded bg-success">Interesse!</span>
                    <lord-icon
                        src="https://cdn.lordicon.com/gzmgulpl.json"
                        trigger="loop"
                        colors="outline:#0a5c15,primary:#049604,secondary:#ebe6ef"
                        style="width:150px;height:150px">
                    </lord-icon>
                </h1>
            </div>
        </div>
        
        





        {{-- Lord Icon CDN --}}
        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    </body>
</html>