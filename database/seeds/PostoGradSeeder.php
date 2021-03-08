<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostoGradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postograds')->insert([
            'nomePg' => 'Coronel',
            'siglaPg' => 'Cel',
            'ordemPg' => '4',
            'circuloPg' => 'Oficiais Superiores'
        ]);
    }
}
