<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- AOS css link for scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @vite(['resources/css/flow.css', 'resources/js/app.js'])
        <title>Flow</title>
    </head>
    <body>
        
        {{$slot}}
        

        {{-- Lord Icon CDN --}}
        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    </body>
</html>