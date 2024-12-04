@if(empty($totalFilms))
<FONT COLOR="red">No se ha encontrado ninguna película</FONT>
@else
<div class="container">
    <h1>{{ $title }}</h1>
    <p>Total de películas disponibles: <strong>{{ $totalFilms }}</strong></p>
</div>
@endif