<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {
    // comentários
    public function up() {
        Schema::create('produtos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->decimal('valor', 10 , 2);
            $table->integer('quantidade');
            $table->longText('descricao');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    // comentários
    public function down() {
        //
    }
}
