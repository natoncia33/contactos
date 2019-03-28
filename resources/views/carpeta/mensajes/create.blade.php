@extends('plantilla')

@section('contenido2')

@stop

    <h1>salu2</h1>
@section('contenido')

@if (session()->has('enviado'))
            <h3>{{session('enviado')}}</h3>

 @else
    
    <title>Saludo</title>

    <form method="post" action="{{route('mensages.store')}}">
        <label for="nombre">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {!!csrf_field()!!}
            <input name="nombre" class="from control" type="nombre" value="{{old('nombre')}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
        </label>
        <label for="email">
            email
            <input name="email" class="from control" type="email" value="{{old('email')}}">
            {{$errors->first('email')}}
        </label>
        <label for="mensaje">
            mensaje
            <input name="mensaje" class="from control" type="mensaje" value="{{old('mensaje')}}">
            {{$errors->first('mensaje')}}
        </label>

        <input value="Enviar"class="from-control" type="submit">

       
         
        @endif
    </form>
@stop