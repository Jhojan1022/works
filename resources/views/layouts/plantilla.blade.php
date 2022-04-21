<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="bg-primary">
        <div>Lista de tareas</div>
        <div>
            <a href="#" id="works">Tareas pendientes</a>
            <a href="#">Tareas completadas</a>
            <a href="#">Historial de tareas</a>
        </div>
    </nav>
    <div id="app" class="container">
        @yield('content')
    </div>
</body>

</html>