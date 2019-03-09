<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder {
    // comentários
    public function run() {
        DB::table('usuarios')->insert([
            // perfil de administrador
            [
                'nome' => 'Administrador',
                'email' => 'admin@email.com',
                'senha' => bcrypt('123456'),
            ],
            // perfil de usuário comum
            [
                'nome' => 'Usuário Comum',
                'email' => 'usuario@email.com',
                'senha' => bcrypt('123456'),
            ],
        ]);
    }
}
