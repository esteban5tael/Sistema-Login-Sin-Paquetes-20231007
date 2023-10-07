@extends('layouts.app')

@section('title')
    {{ __('Index') }}
@endsection

@section('h1')
    {{ __('Index') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <p class="lead">
                ¿Quieres aprender cómo manejar el login en Laravel 10 sin el uso de paquetes?
            </p>
            <p>
                Este proyecto es perfecto para ti. Es un pequeño desarrollo que muestra cómo implementar un sistema de login básico en Laravel usando solo las herramientas que vienen por defecto.
            </p>
            @auth
            <p>
                ¡Empieza a aprender hoy mismo!
            </p>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Iniciar Sesión</a>
            @endauth
        </div>
    </div>
</div>

@endsection
