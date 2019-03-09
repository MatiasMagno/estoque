<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // perfil de administrador
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => bcrypt('123456'),
        ]);

        // perfil de usuário comum
        DB::table('users')->insert([
            'name' => 'Usuário Comum',
            'email' => 'usuario@email.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
