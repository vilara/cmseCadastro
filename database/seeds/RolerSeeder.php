<?php

use App\User;
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
            'user_id' => User::all()->last()->id,
            'roler_id' => 1
        ]);
    }
}
