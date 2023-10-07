@extends('layouts.app')

@section('title')
    {{ __('Login') }}
@endsection

@section('h1')
    {{ __('Login') }}
@endsection

@section('content')
    {{--  --}}
    <form class="formLogin" action="" method="POST">
        @csrf
        <div>

            <label for="" class="form-label">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('Email') }}" required><br>
            {{--  --}}
            <label for="" class="form-label">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}"  required><br>
                {{--  --}}
                <input class="btn btn-primary" type="submit" value="{{ __('Login') }}">

    </form>

    </div>
@endsection
