
@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')

<img src="/img/pexels-abet-llacer-919734.jpg" alt="">
<h1>Algum título</h1>
@if(10 > 5)
<p>A condição é True</p>
@endif
<p>{{$nome}}</p>
@if($nome == "Matheus")
<p>O nome é Matheus</p>
@elseif($nome == "Wesley")
<p>O nome é {{$nome}}</p>
<p>E ele tem {{$idade}} anos!</p>
@endif
@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
    @if($i == 2)
        <p>O número é {{$arr[$i]}}</p>
    @endif
@endfor
@php
    $name = "João";
    echo $name;
@endphp
{{-- Este é um comentário do Blade! --}}
@foreach ($nomes as $nome)
    <h1>
        {{ $loop -> index }}
        O nome é {{ $nome }}
    </h1>
@endforeach

@endsection
