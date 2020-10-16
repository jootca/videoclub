@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-sm-4">
    <img src="{{$peliculas['poster']}}" width="300"/>
    </div>
    <div class="col-sm-8">
    <h1>{{$peliculas['title']}}</h1>
    <h4>Año: {{$peliculas['year']}}</h4>
    <h4>Director: {{$peliculas['director']}}</h4>
    </br>
    <p>
        <strong>Resumen:</strong> {{$peliculas['synopsis'] }}
    </p>
    <p>
        <strong>Estado:</strong> {{$peliculas['rented']?'Pelicula alquilada':'Pelicula disponible' }}
    </p>
    @if($peliculas['rented'])
    <button type="button" class="btn btn-danger">Devolver Pelicula</button>
    @else
    <button type="button" class="btn btn-primary">Alquiler Pelicula</button>
    @endif 
    <a type="button" class="btn btn-warning" href="{{ url('catalog/edit/'.$pos)}}">Editar Pelicula</a>  
    <a type="button" class="btn btn-secondary" href="{{ url('/')}}">Volver al listado</a> 
    </div>
</div>
@endsection