<h1>listado de frutas</h1>

<a href="{{ action('FrutasController@getnaranjas')}}">ir a naranjas 

<a href="{{ action('FrutasController@getperas')}}">ir a peras 

<ul>
@foreach ($frutas as $fruta) 
  <li> {{$fruta}} </li>
  
@endforeach
</ul>


<h1>formulario en laravel</h1>
<form action="{{ url ('/recibir')}}" method="POST">
 <p>
    <LABEl for="nombre">nombre de la fruta</LABEl>
    <input type="text" name="nombre" >
 </p>
 <p>
  <LABEl for="descripcion">descripcion de la fruta</LABEl>
  <texarea name="descripcion" ></textarea>
</p>
 
  <input type="submit" name="enviar" >
</form>