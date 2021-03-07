<?php

use App\Om;
use Illuminate\Database\Seeder;

class OmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Om::create([
            'nomeOm' => '2º Batalhão de Polícia do Exército',
            'siglaOm' => '2º BPE',
            'codom' => '012716',
            'codug' => '012716'
        ]);
    }
}
