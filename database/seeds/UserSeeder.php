<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::connection('mysql2')->table('users')->create([
        //     'name' => 'Marcelo Martins Vilara',
        //     'email' => 'marcelovilara@gmail.com',
        //     'password' => Hash::make(12345678),
        // ]);

        User::create([
            'name' => 'Marcelo Martins Vilara',
            'email' => 'marcelovilara@gmail.com',
            'password' => Hash::make(12345678)
        ]);
    }
}
