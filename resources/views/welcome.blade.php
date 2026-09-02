<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body>

    <h1>olá, testandp</h1>


    @if (10 > 5)
        <p>A condiçõa é true</p>
    @endif


    <p>{{ $nome }}</p>


    @if ($nome == 'guilherm')
        <p>O nome é guilherme</p>
    @elseif ($nome == 'guilherme')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e também trabalha como {{ $profissao }}
        </p>
    @else
        <p>O nome não caiu aqui</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} {{ $i }}</p>
        @if ($i == 2)
            <p>oi, é 2</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{ $nome }}</p>
    @endforeach

</body>
