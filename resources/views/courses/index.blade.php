<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>
<body>
    <h2>Listar os Cursos</h2>
    <a href="{{route('course.show')}}">Visualizar o Curso</a><br>
    <a href="{{route('course.create')}}">Cadastrar Curso</a><br>
    <a href="{{route('course.edit')}}">Editar o Curso</a><br>
    {{-- <a href="{{route('course.destroy')}}">Apagar o Curso</a><br> --}}

</body>
</html>
