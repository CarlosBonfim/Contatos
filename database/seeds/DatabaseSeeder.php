<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()//è essa função que será chamada quanda chamaremos o seeder
    {
        $this->call([
            ContatosTableSeeder::class,
            UsersTableSeeder::class,
            ]);
    }
}
