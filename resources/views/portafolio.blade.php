@extends('layaut')
@section('content')
    @foreach ($portafolios as $item)
        <h1>{{$item['title']}}</h1>
        
    @endforeach
    <form action="{{route('portafolios.store')}}" method="POST" >
        @csrf
    <input id="nombre" name="nombre" type="text" placeholder="nombre" value="{{old('nombre')}}"><br>
        {!!$errors->first('nombre','<small class="actives">:message</small>')!!}
        
        <input id="email" name="email" type="email" placeholder="email"><br>
        <input id="asunto" name="asunto" type="text" placeholder="asunto"><br>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="mensaje"></textarea><br>
        <button type="submit" >Enviar</button>
    </form>
@endsection
