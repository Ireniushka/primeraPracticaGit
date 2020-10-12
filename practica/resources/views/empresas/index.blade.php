@extends('layouts.app')

<!-- creamos contenido -->
@section('content')
   
        @forelse($empresas as $empresa)
        <div>
                {{$empresa->nombre}} <!-- pedimos q muestre nombre empresas con el bucle -->
        </div>
            
        @empty
            {{__("No hay empresas disponibles")}}<!-- si no existe muestra esto y al ponerlo entre llaves y con las __ lo traducira al lenguaje de la pagina -->
        @endforelse
   
    <!-- lo siguiente es para que aparezca cambio de paginas abajo -->
    @if($empresas -> count())
        {{$empresas -> links()}}
    @endif
@endsection