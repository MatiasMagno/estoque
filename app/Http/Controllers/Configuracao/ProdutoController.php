<?php

namespace SGE\Http\Controllers\Configuracao;

use SGE\Http\Requests;
use SGE\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {
    // comentários
    public function index() {
        $produtos = DB::select('SELECT * FROM produtos');
        return reponse($produtos);
        echo response;
    }

    // comentários
    public function create() {
        //
        $produtos = DB::query();
        return $produtos;
    }

    // comentários
    public function store(Request $request) {
        //
        $produtos = DB::query();
        return $produtos;
    }

    // comentários
    public function show($id) {
        //
        $produtos = DB::query();
        return $produtos;
    }

    // comentários
    public function edit($id) {
        //
        $produtos = DB::query();
        return $produtos;
    }

    // comentários
    public function update(Request $request, $id) {
        //
        $produtos = DB::query();
        return $produtos;
    }

    // comentários
    public function destroy($id) {
        //
        $produtos = DB::query();
        return $produtos;
    }
}
