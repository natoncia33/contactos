<!DOCTYPE html>
    <html>
        <head>
            <style>
                .active{
                    text-decoration:none;
                    color:red;
                }
                .error{
                    color:red;
                    font-size:11px;
                }
            </style>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
        </head>
        @yield('contenido')
        <body>
            <nav>
                <!--<a href="<?php echo route('home') ?>">inicio</a>
                <a href="<?php echo route('saludo') ?>">saludo</a>
                <a href="<?php echo route('contacto') ?>">contacto</a>-->

                <a class = "{{request()->is('/')? 'active' : ''}}"
                href="{{route('home') }}">Inicio</a>

                <a class = "{{request()->is('saludo')? 'active' : ''}}"
                href="{{route('saludo') }}">Saludos</a>

                <a class = "{{request()->is('contacto')? 'active' : ''}}"
                href="{{route('mensages.create') }}">Contactos</a>
            </nav>
        @yield('contenido2')
        </body>

        
    </html>