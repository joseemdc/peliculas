@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>

                            {{ __('¡Bienvenido, ') }} {{ Auth::user()->name }} {{ __('!') }}
                        </h1>
                        <a class="btn btn-primary mt-5" href="{{ route('peliculas.index') }}"> {{ __('Explorar el catálogo') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
