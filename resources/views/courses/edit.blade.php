<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>

    <a href="{{ route('course.index') }}">Listar</a><br>
    <a href="{{ route('course.show', ['course' => $course->id])}}">Visualizar</a><br>
    {{-- <a href="{{ route('course.destroy')}}">Apagar</a><br> --}}

    <h2>Editar o Curso</h2>

    <form action="{{ route('course.update', ['course' => $course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do curso"
            value="{{ old('name', $course->name) }}" required><br><br>

        <button type="submit">Salvar</button>

    </form>

</body>

</html>
