<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Prueba 03072024',
                    'email' => 'prueba03072024@hotmail.com',
                    'password' => bcrypt('prueba123'),
                ]
            ]
        );
    }
}
//¡IMPORTANTE!
//siempre guardar y luego enviar comando php artisan db:seed