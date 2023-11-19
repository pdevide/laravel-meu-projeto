<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(){
    //Recuperar os registros do banco
    $courses = Course::orderByDesc('created_at')->paginate(10);
    //Carrega a view
    return view('courses.index', ['courses' => $courses]);
   }

   public function show(Request $request){

    //detalhes do curso
    $course = Course::where('id', $request->courseId)->first();

    return view('courses.show', ['course' => $course]);
   }
   public function create(){

    //carregar o formulario para cadastrar novo curso
    return view('courses.create');
   }
   public function store(Request $request){
        // dd($request);
        Course::create($request->all()); //todas as colunas da tabela
        // Course::create([ 'name' => $request->name]); // especifica coluna a coluna

        //redireciona a pagina ap¢s o insert no banco
        return redirect()->route('course.show')->with('sucess','Curso cadastrado com sucesso!');

   }
   public function edit(){

    //carregar o formulario para cadastrar novo curso
    return view('courses.edit');
   }
   public function update(){
        dd("editar no banco de dados");
   }
   public function destroy(){
        dd("excluir no banco de dados");
   }
}
