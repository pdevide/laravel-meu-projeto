<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>
<body>
    <h2>Detalhes do Curso</h2>
    @if (session('sucess'))
        <p style="color: #082">
            {{session('sucess')}}
        </p>
    @endif

    <a href="{{route('course.index')}}">Listar os Cursos</a><br>
    <a href="{{route('course.create')}}">Cadastrar Curso</a><br>
    <a href="{{route('course.edit')}}">Editar o Curso</a><br>
    {{-- <a href="{{route('course.destroy')}}">Apagar o Curso</a><br> --}}
</body>
</html>
