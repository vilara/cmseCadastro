<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('civis')->insert([
            "primeiro_nome" => 'Maria Benedita',
        ]);
    }
}
