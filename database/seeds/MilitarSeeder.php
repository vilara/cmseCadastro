<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MilitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('militares')->insert([
            "postograd_id" => 1,
            "situacao" => 'ativa',
            'nome_guerra' => 'Vilara',
            'forca_id' => 1
        ]);
    }
}
