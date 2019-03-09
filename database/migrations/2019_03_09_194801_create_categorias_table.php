<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration {
    // comentários
    public function up() {
        Schema::create('categorias', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->longText('descricao');
            $table->timestamps('criado');
        });
    }

    // comentários
    public function down() {
        //
    }
}
