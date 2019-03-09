<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder {
    // comentários
    public function run() {
        // criação de massa de dados
        DB::table('produtos')->insert([
            [
                'nome' => 'Geladeira',
                'valor' => '5900.00',
                'quantidade' => '10',
                'descricao' => 'N/A',
                'categoria_id' => '2',
            ],
            [
                'nome' => 'Fogão Elétrico',
                'valor' => '950.00',
                'quantidade' => '10',
                'descricao' => 'N/A',
                'categoria_id' => '2',
            ],
            [
                'nome' => 'Microondas Automático',
                'valor' => '1520.00',
                'quantidade' => '10',
                'descricao' => 'N/A',
                'categoria_id' => '2',
            ],
        ]);
    }
}
