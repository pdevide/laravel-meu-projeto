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
    <a href="{{route('course.create')}}">Cadastrar Curso</a><br><br>
    {{-- <a href="{{route('course.destroy')}}">Apagar o Curso</a><br> --}}

    @forelse ($courses as $course)
        ID........:{{$course->id}} <br>
        Nome......:{{$course->name}} <br>
        Cadastrado:{{\Carbon\Carbon::parse($course->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
        Atualizado:{{\Carbon\Carbon::parse($course->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
        <a href="{{route('course.show',['courseId' => $course->id])}}">Visualizar</a><br><br><hr>
    @empty
        <p style="color: #f00">Nenhum curso encontrado!</p>
    @endforelse

    {{ $courses->links() }}
</body>
</html>
