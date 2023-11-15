<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(){
    //C¢digo para listar os cursos
    //Carrega a view
    return view('courses.index');
   }

   public function show(){

    //detalhes do curso
    return view('courses.show');
   }
   public function create(){

    //carregar o formulario para cadastrar novo curso
    return view('courses.create');
   }
   public function store(){
        dd("cadastrar no banco de dados");
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
