<?php

use Illuminate\Database\Seeder;
use App\Om;
use Illuminate\Support\Facades\DB;

class OmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oms')->insert([
            'nomeOm' => '2º Batalhão de Polícia do Exército',
            'siglaOm' => '2º BPE',
            'codom' => '012716',
            'codug' => '012716'
        ]);
    }
}
