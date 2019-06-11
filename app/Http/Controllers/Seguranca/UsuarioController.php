<?php

namespace SGE\Http\Controllers\Seguranca;

use SGE\Http\Requests;
use SGE\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller {
    // comentários
    public function index() {
        $usuarios = DB::select('SELECT * FROM usuarios');
        return view('seguranca/usuarios/usuarios')->with('usuarios', $usuarios);
    }

    // comentários
    public function create() {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }

    // comentários
    public function store(Request $request) {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }

    // comentários
    public function show($id) {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }

    // comentários
    public function edit($id) {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }

    // comentários
    public function update(Request $request, $id) {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }

    // comentários
    public function destroy($id) {
        //
        $usuarios = DB::query('');
        return $usuarios;
        dd($usuarios);
    }
}
