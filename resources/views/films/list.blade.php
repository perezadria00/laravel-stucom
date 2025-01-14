@extends('layouts.app')

@section('title', 'Lista de Películas')

@section('header')
    <h2 class="justify-content-center">{{ $title }}</h2>
@endsection

@section('content')
    @if(empty($films))
        <div class="alert alert-danger text-center" role="alert">
            No se ha encontrado ninguna película.
        </div>
    @else
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>País</th>
                    <th>Duración (minutos)</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                    <tr>
                        <td>{{ $film['name'] }}</td>
                        <td>{{ $film['year'] }}</td>
                        <td>{{ $film['genre'] }}</td>
                        <td>{{ $film['country'] }}</td>
                        <td>{{ $film['duration'] }}</td>
                        <td>
                            <img src="{{ $film['img_url'] }}" alt="{{ $film['name'] }}" class="img-fluid" style="width: 100px; height: auto;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

@section('footer')
@endsection


