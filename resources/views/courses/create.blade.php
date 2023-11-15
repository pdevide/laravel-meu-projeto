<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>
<body>
    <a href="{{route('course.index')}}">Listar os Cursos</a><br>
    <a href="{{route('course.show')}}">Visualizar</a><br>
    <a href="{{route('course.edit')}}">Editar o Curso</a><br><br>
    {{-- <a href="{{route('course.destroy')}}">Apagar o Curso</a><br> --}}
    <h2>Cadastrar Curso</h2><br>


    <form action="{{route('course.store')}}" method="POST">
        @csrf
        @method("POST")

        <label for="name">Nome do Curso:</label>
        <input type="text" name="name" placeholder="Nome do curso" value = "{{old('name')}}" required> <br><br>
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>

