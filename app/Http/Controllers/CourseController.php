<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    // Listar os cursos
    public function index()
    {

        // Recuperar os registros do banco dados
        $courses = Course::orderByDesc('created_at')->paginate(10);

        // Carregar a VIEW
        return view('courses.index', ['courses' => $courses]);
    }

    // Detalhes do curso
    public function show(Request $request, Course $course)
    {

        // Recuperar as informa‡äes do curso do banco de dados
        //$course = Course::where('id', $request->course)->first();

        // Carregar a VIEW
        return view('courses.show', ['course' => $course]);
    }

    // Carregar o formul rio cadastrar novo curso
    public function create()
    {

        // Carregar a VIEW
        return view('courses.create');
    }

    // Cadastrar no banco de dados o novo curso
    public function store(Request $request)
    {

        // Cadastrar no banco de dados na tabela cursos os valores de todos os campos
        $course = Course::create($request->all());
        //Course::create([ 'name' => $request->name]);

        // Redirecionar o usu rio, enviar a mensagem de sucesso
        return redirect()->route('course.show', ['course' => $course->id])->with('success', 'Curso cadastrado com sucesso!');
    }

    // Carregar o formul rio editar curso
    public function edit(Request $request, Course $course)
    {

        //$course = Course::where('id', $request->course)->first();
        //dd($course);

        // Carregar a VIEW
        return view('courses.edit', ['course' => $course]);
    }

    // Editar no banco de dados o curso
    public function update(Request $request, Course $course)
    {

        // Editar as informa‡äes do registro no banco de dados
        $course->update(['name' => $request->name]);

        // Redirecionar o usu rio, enviar a mensagem de sucesso
        return redirect()->route('course.show', ['course' => $request->course])->with('success', 'Curso editado com sucesso!');
    }

    // Excluir o curso do banco de dados
    public function destroy(Course $course)
    {
        // Excluir o registro do banco de dados
        // dd($course->id);
        $course->delete();

        // Redirecionar o usu rio, enviar a mensagem de sucesso
        return redirect()->route('course.index')->with('success', 'Curso exclu¡do com sucesso!');
    }
}
