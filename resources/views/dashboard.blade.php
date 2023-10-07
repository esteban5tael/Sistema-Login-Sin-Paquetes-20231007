@extends('layouts.app')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('h1')
    {{ __('Welcome') }}: {{auth()->user()->name}}
@endsection

@section('content')
    {{--  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Dashboard</h1>
                <p class="lead">
                    Bienvenid@ al dashboard de Login Sin Paquetes.
                </p>
                <p>
                    Aquí puedes gestionar el contenido de tu aplicación.
                </p>
                
            </div>
        </div>
    </div>
    
@endsection
