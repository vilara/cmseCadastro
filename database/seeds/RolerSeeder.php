<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolers')->insert([
            'name' => 'Usuario',
            'label' => 'Usuário do sistema'
        ]);

        DB::table('roler_user')->insert([
            'user_id' => 1,
            'roler_id' => 1
        ]);
    }
}
