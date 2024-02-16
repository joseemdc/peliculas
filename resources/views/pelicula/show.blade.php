@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? "{{ __('Show') Pelicula" }}
@endsection

@section('content')
    <div class="movie-ticket">
        <div>
            <!-- Item -->
            <div class="ui-item">
                <!-- Head -->
                <div class="ui-head">
                    <!-- Background Image -->
                    <img src="{{ $pelicula->imagen }}"class="backgroundimage">
                    <!-- Transparent Background -->
                    <div class="ui-trans clearfix">
                        <!-- Image -->
                        <img src="{{ $pelicula->imagen }}" alt="" class="img-responsive" style="border-radius: 5%">
                        <!-- Details -->
                        <div class="ui-details clearfix">
                            <!-- Movie Name -->
                            <h2><a href="#">{{ $pelicula->nombre }}</a></h2>
                            <!-- Labels -->
                            <a href="#" class="label">{{ $pelicula->year }}</a>

                            <a href="#" class="label"> {{ $pelicula->duracion }} min</a>
                            <a href="#" class="label"> {{ $pelicula->categoria->nombre }}</a>

                            <!-- Paragraph -->
                            <p class="pcard">{{ $pelicula->descripcion }}</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
