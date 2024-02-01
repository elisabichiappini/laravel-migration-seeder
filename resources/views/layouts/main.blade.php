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
    <!--header-->
    @include('shared.header')
    <!--/header-->
    <!--main-->
    <main>
        @yield('main')
    </main>
    <!--main-->
    <!--footer-->
    @include('shared.footer')
    <!--/footer-->
</body>
</html>