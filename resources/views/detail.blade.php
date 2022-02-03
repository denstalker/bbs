@extends('layouts.index')

@section('title')
{{$b->title;}}    
@endsection

@section('content')
    

    {{$b->title;}}

    <p><a href="{{ route('index')}}">На главную</a></p>

@endsection
