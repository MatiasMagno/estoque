<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    // comentários
    public function run() {
        DB::table('users')->insert([
            // perfil de administrador
            [
                'name' => 'Administrador',
                'email' => 'admin@email.com',
                'password' => bcrypt('123456'),
            ],
            // perfil de usuário comum
            [
                'name' => 'Usuário Comum',
                'email' => 'usuario@email.com',
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
