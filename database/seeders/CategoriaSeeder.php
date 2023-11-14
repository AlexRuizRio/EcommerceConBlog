<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Programacion',
                'descripcion' => 'Referido a lenguajes de programacion'
            ],
            [
                'nombre' => 'Ciberseguridad',
                'descripcion' => 'Referido a toda seguridad digital'
            ],
            [
                'nombre' => 'Sistemas informaticos',
                'descripcion' => 'Referido a cualquier sistema informatico'
            ],
            [
                'nombre' => 'Redes informaticas',
                'descripcion' => 'Referido a cualquier red entre cualquier dispositivo'
            ],
        ]);
    }
}
