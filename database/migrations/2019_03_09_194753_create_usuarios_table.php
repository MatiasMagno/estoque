<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {
    // comentários
    public function up() {
        Schema::create('usuarios', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // comentários
    public function down() {
        //
    }
}
