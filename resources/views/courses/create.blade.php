<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>
    <br>
    <a href="{{ route('course.index')}}">Listar</a><br>

    <h2>Cadastrar Curso</h2>

    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{ old('name') }}" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>
