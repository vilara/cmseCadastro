<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'read',
            'label' => 'Usuário simples do sistema'
        ]);

        DB::table('permission_roler')->insert([
            'permission_id' => 1,
            'roler_id' => 1
        ]);
    }
}
