<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'nomeSecao' => '4ª Seçao',
            'siglaSecao' => '4ª Sec'
        ]);

        DB::table('om_section')->insert([
            'section_id' => 1,
            'om_id' => 1
        ]);
    }
}
