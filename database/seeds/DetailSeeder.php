<?php

use App\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'user_id' => 1,
            'idt' => '0288173735',
            'sexo' => 'masculino',
            'om_id' => 1,
            'cargo_id' => 1,
            'dtNasc' => '1970-03-26',
            'section_id' => 1,
            'detailable_id' => 1,
            'detailable_type' => 'militar'
        ]);
    }
}
