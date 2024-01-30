<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Station</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>
<body>
{{--header--}}
<header>
    <h1 class="text-center">Train Station</h1>
</header>
{{--header--}}
{{--main: list programming train--}}
<main>
    <section class="container">
        <h2>Prossimi treni in partenza</h2>
        <ul class="p-0">
            @foreach ($trains as $train )
            <li class="list-group-item"><strong>{{ $train['azienda']}}</strong> partenza da {{ $train['stazione_partenza']}}, {{ $train['orario_partenza'] }} </li>                
            @endforeach
        </ul>
    </section>
</main>
{{--main: list programming train--}}
</body>
</html>