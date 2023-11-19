<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>

    <a href="{{ route('course.index')}}">Listar</a><br>
    <a href="{{ route('course.edit', ['course' => $course->id ])}}">Editar</a><br>
    {{-- <a href="{{ route('course.destroy')}}">Apagar</a><br> --}}

    <h2>Detalhes do Curso</h2>

    @if(session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    ID: {{ $course->id }}<br>
    Nome: {{ $course->name }}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($course->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
    Editado: {{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>

</body>

</html>
