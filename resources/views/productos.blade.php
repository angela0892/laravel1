<h1>Productos</h1>

@php

$nombre = "Luis";
$edad = 19;
@endphp

<h2>Hola {{ $nombre }}</h2>

@if ($edad >= 19)
<h3>Eres mayor de edad</h3>
@else
<h3>Eres menor de edad</h3>
@endif