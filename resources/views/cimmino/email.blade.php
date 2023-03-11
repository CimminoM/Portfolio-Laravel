
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- AOS css link for scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        
        
        <h2>Hai ricevuto una mail da: {{$data['name']}}</h2> 
        <h2> La sua email e'  {{$data['email']}}</h2>

        <h2> Questo e' cio' che ha da dirti:<br>{{$data['message']}}</h2>
        




        {{-- Lord Icon CDN --}}
        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    </body>
</html>