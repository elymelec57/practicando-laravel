<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $val = 'laravel avanzado';
        $curso->name = $val;
        $curso->slug = Str::slug($val, '-');
        $curso->descripcion = 'el mejor framework del mundo';
        $curso->categoria = 'desarrollo web';

        $curso->save();

        $curso1 = new Curso();
        $val1 = 'react 9';
        $curso1->name = $val1;
        $curso1->slug = Str::slug($val1, '-');
        $curso1->descripcion = 'el mejor framework de javascript';
        $curso1->categoria = 'desarrollo front-end';

        $curso1->save();

        $curso2 = new Curso();
        $val2 = 'vue 8';
        $curso2->name = $val2;
        $curso2->slug = Str::slug($val2, '-');
        $curso2->descripcion = 'el mejor framework de ely';
        $curso2->categoria = 'desarrollo de interfaz grafica';

        $curso2->save();

        $curso3 = new Curso();
        $val3 = 'angular';
        $curso3->name = $val3;
        $curso3->slug = Str::slug($val3, '-');
        $curso3->descripcion = 'el mejor framework de america';
        $curso3->categoria = 'desarrollo back-end';

        $curso3->save();

        $curso4 = new Curso();
        $val4 = 'laravel intermedio para junior';
        $curso4->name = $val4;
        $curso4->slug = Str::slug($val4, '-');
        $curso4->descripcion = 'el mejor framework del mundo';
        $curso4->categoria = 'desarrollo web';

        $curso4->save();
    }
}
