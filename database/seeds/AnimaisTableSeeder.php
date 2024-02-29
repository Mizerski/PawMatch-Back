<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animais = [
            ['nome' => 'Rex', 'porte' => 'Grande', 'raça' => 'Labrador', 'cor' => 'Preto'],
            ['nome' => 'Bolinha', 'porte' => 'Pequeno', 'raça' => 'Poodle', 'cor' => 'Branco'],
            ['nome' => 'Thor', 'porte' => 'Médio', 'raça' => 'Vira-lata', 'cor' => 'Caramelo'],
            ['nome' => 'Odin', 'porte' => 'Grande', 'raça' => 'Vira-lata', 'cor' => 'Amarelo'],
            ['nome' => 'Loki', 'porte' => 'Pequeno', 'raça' => 'Vira-lata', 'cor' => 'Preto'],
        ];

        DB::table('animais')->insert($animais);
    }
}
