<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {
    // comentários
    public function up() {
        Schema::create('produtos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->decimal('preco', 5 , 2);
            $table->boolean('usado')->default('1');
            $table->integer('categoria_id')->unsigned();
            $table->longText('descricao');
            $table->timestamps('criado');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    // comentários
    public function down() {
        //
    }
}
