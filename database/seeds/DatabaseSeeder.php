<?php

use App\Cargo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ForcaSeeder::class,
            OmSeeder::class,
            SectionSeeder::class,
            PostoGradSeeder::class,
            MilitarSeeder::class,
            CivilSeeder::class,
            CargoSeeder::class,
            DetailSeeder::class
        ]);
    }
}
