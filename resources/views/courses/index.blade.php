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
    <a href="{{ route('course.create') }}">Cadastrar</a><br>

    <h2>Listar os Cursos</h2>

    @forelse ($courses as $course)
        ID: {{ $course->id }}<br>
        Name: {{ $course->name }}<br>
        Cadastrado: {{ \Carbon\Carbon::parse($course->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
        Editado: {{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
        <a href="{{ route('course.show', ['course' => $course->id]) }}">Visualizar</a><br>
        <a href="{{ route('course.edit', ['course' => $course->id]) }}">Editar</a><br>
        <hr>
    @empty
        <p style="color: #f00;">Nenhum curso encontrado!</p>
    @endforelse

    {{ $courses->links() }}

</body>

</html>
