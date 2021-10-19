<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->

    <!--estilos-->
    <style>
        .active{
            color: rgb(34, 209, 49);
        }
    </style>
</head>
<body>
    <!--header-->

    <!--navs-->
    <header>
        <nav>
            <h3>Cursos extraordinarios</h3>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">home</a>
                
                </li>
                <li><a href="{{route('curso.index')}}" class="{{request()->routeIs('curso.index') ? 'active' : ''}}">Cursos</a>
                </li>
                <li><a href="{{route('contacto')}}" class="{{request()->routeIs('contacto') ? 'active' : ''}}">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!--footer-->

    <!--script-->
</body>
</html>