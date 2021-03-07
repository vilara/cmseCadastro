<?php

use Illuminate\Database\Seeder;
use App\Forca;
use Illuminate\Support\Facades\DB;

class ForcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('forcas')->insert([
            "abrev" => 'EB',
            "nome" => 'Exército Brasileiro'
        ]);
       
    }
}
