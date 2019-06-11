<?php

namespace SGE\Http\Controllers\Configuracao;

use SGE\Http\Requests;
use SGE\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller {
    // comentários
    public function index() {
        $categorias = DB::select('SELECT * FROM categorias');
        return view('configuracao/categorias/categorias')->with('categorias' , $categorias);
    }

    // comentários
    public function create() {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }

    // comentários
    public function store(Request $request) {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }

    // comentários
    public function show($id) {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }

    // comentários
    public function edit($id) {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }

    // comentários
    public function update(Request $request, $id) {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }

    // comentários
    public function destroy($id) {
        //
        $categorias = DB::query('');
        return $categorias;
        dd($categorias);
    }
}
