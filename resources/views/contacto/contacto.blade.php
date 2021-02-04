{{--mi comentario--}}


@include('contacto.cabecera', array('nombre' => $nombre))

<h1>Pagina de contacto {!!$nombre!!} {{--isset($edad) && !is_null($edad) ? $edad : 'no existe la edad'--}}</h1>

{{--condicional if--}}

@if(!is_null($edad))
  no existe la edad
@else 
   si existe la edad: {{$edad}}
@endif

<p>
 <?php $numero = 4; ?>
 tabla del {{$numero}}
<br/>
</p>
@for($i =1; $i <= 10; $i++)
{{$i. ' x '.$numero. ' ='.($i*$numero)}}<br/>
@endfor

<?php $i = 1; ?>
@while($i<=7)
  {{'hola mundo' .$i}}
  <?php $i++; ?>
@endwhile

<h1>listado de frutas</h1>
@foreach ($frutas as $fruta)
  <p> {{$fruta}} </p>
@endforeach