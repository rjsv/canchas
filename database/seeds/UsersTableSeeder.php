<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Frank Rodriguez',
            'email' => 'frank@example.com',
            'password' => bcrypt('password'),
            'dni' => '12345678',
            'category' => 'admin',
            'birthdate' => '1990-01-01',
            'sex' => true, // booleano
            'phone' => '123-456-7890',
            'photo' => 'default.jpg',
            'level' => 1, // ejemplo de nivel
            'dominant_hand' => 1,
            'is_active' => true // nuevo campo
        ]);

        User::create([
            'name' => 'Roberto Salas',
            'email' => 'roberto@example.com',
            'password' => bcrypt('password'),
            'dni' => '12345678',
            'category' => 'admin',
            'birthdate' => '1990-01-01',
            'sex' => true, // booleano
            'phone' => '123-456-7890',
            'photo' => 'default.jpg',
            'level' => 1, // ejemplo de nivel
            'dominant_hand' => 1,
            'is_active' => true // nuevo campo
        ]);

        User::create([
            'name' => 'Martin Cruz',
            'email' => 'martin@example.com',
            'password' => bcrypt('password'),
            'dni' => '12345678',
            'category' => 'admin',
            'birthdate' => '1990-01-01',
            'sex' => true, // booleano
            'phone' => '123-456-7890',
            'photo' => 'default.jpg',
            'level' => 1, // ejemplo de nivel
            'dominant_hand' => 1,
            'is_active' => true // nuevo campo
        ]);

        User::create([
            'name' => 'Carlos Aragon',
            'email' => 'carlos@example.com',
            'password' => bcrypt('password'),
            'dni' => '12345678',
            'category' => 'admin',
            'birthdate' => '1990-01-01',
            'sex' => true, // booleano
            'phone' => '123-456-7890',
            'photo' => 'default.jpg',
            'level' => 1, // ejemplo de nivel
            'dominant_hand' => 1,
            'is_active' => true // nuevo campo
        ]);

        User::create([
            'name' => 'Jorge Ramos',
            'email' => 'jorge@example.com',
            'password' => bcrypt('password'),
            'dni' => '12345678',
            'category' => 'admin',
            'birthdate' => '1990-01-01',
            'sex' => true, // booleano
            'phone' => '123-456-7890',
            'photo' => 'default.jpg',
            'level' => 1, // ejemplo de nivel
            'dominant_hand' => 1,
            'is_active' => true // nuevo campo
        ]);
    }
}
