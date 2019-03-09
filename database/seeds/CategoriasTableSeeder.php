<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // criação de massa de dados
        DB::table('categorias')->insert([
            [
                'nome' => 'Escritório',
            ],
            [
                'nome' => 'Eletrônicos',
            ]
        ]);
    }
}
