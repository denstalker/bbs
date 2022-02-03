@extends('layouts.index')

@section('title', 'Главная')
@section('content')
    
    @if (count($bb) > 0)
        @foreach ($bb as $item)
            <h1>{{$item->title}}</h1>
            <p>{{$item->content}}</p>
            <p class="redPrice">{{$item->price}}</p>
            
            <p><a href="{{ route('detail', ['bb' => $item->id]) }}">Подробее</a></p>
            <hr>
        @endforeach
    @else
        <H1>Список пуст</H1>
    @endif
        

@endsection
