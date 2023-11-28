<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
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
    </body>
</html>
