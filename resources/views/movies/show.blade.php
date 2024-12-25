@extends('layout')

@section('title', 'InfoPelis Carlos Sáez')

@section('content')
    <main>
        <h1>Ficha de la película {{ $id }} • Carlos Sáez</h1>
        <div class="fichaPelicula">
            <div class="mv_icons">
                <span id="btn_actors" class="movies_icon">
                    <a href="{{ route('characters', ['id' => $id]) }}">👤</a> {{-- Se le pasa el id como un array asociativo --}}
                </span>
                <span id="actors">Actores / Actrices</span>
                <span id="btn_edit" class="movies_icon">
                    <a href="{{ route('editMovie', ['id' => $id]) }}">📝</a> {{-- Se le pasa el id como un array asociativo --}}
                </span>
                <span id="edit">Editar película</span>
            </div>
        </div>
    </main>
@endsection
