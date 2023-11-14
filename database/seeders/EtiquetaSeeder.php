<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etiquetas')->insert([
            [
                'nombre' => 'Java',
                'descripcion' => 'Lenguaje de programacion'
            ],
            [
                'nombre' => 'PHP',
                'descripcion' => 'Lenguaje de programacion'
            ],
            [
                'nombre' => 'Javacript',
                'descripcion' => 'Lenguaje de programacion'
            ],
            [
                'nombre' => 'Python',
                'descripcion' => 'Lenguaje de programacion'
            ],
            [
                'nombre' => 'SQL',
                'descripcion' => 'Bases de datos'
            ],
            [
                'nombre' => 'HTML',
                'descripcion' => 'Lenguaje de marcas'
            ],
            [
                'nombre' => 'CSS',
                'descripcion' => 'Lenguaje de marcas'
            ],
            [
                'nombre' => 'Laravel',
                'descripcion' => 'Framework PHP'
            ],
            [
                'nombre' => 'Angular',
                'descripcion' => 'Framework TS'
            ],
            [
                'nombre' => 'Spring Boot',
                'descripcion' => 'Framework Java'
            ],
            [
                'nombre' => 'React',
                'descripcion' => 'Framework JavaScript'
            ],
        ]);
    }
}
