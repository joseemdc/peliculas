@extends('layouts.app')

@section('template_title')
    Pelicula
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Películas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('peliculas.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Añadir nueva') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <div class="row row-cols-1 row-cols-md-5 g-4 text-center">
                        @foreach ($peliculas as $pelicula)
                            <div class="col d-flex justify-content-center">
                                <div class="card text-center h-100"style="width:200px">
                                    <img src="{{ $pelicula->imagen }}" class="card-img-top h-auto d-inline-block"
                                        style="border-radius: 5%" alt="Hollywood Sign on The Hill" />
                                    <div class="card-body ">
                                        <h5 class="card-title">{{ $pelicula->nombre }}</h5>
                                        <h6 class="card-subtitle">{{ $pelicula->year }} {{ $pelicula->categoria->nombre }}
                                            <br>Duración: {{ $pelicula->duracion }}'</h6>
                                        <p class="card-text">
                                            {{ Str::substr($pelicula->descripcion, 0, 40) }}...
                                        </p>
                                        <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('peliculas.show', $pelicula->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('peliculas.edit', $pelicula->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                {!! $peliculas->links() !!}
            </div>
        </div>
    </div>
@endsection
