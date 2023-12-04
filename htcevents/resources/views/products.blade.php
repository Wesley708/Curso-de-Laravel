@extends('layouts.main')

@section('title', 'Products')
@section('content')

<h1>
    Produtos
</h1>

@if($busca != '')
    <p>O cliente fez busca por: {{ $busca }} </p>
@endif

@endsection
