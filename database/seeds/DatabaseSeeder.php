<?php

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
        App\Article::truncate();
        // $this->call(UsersTableSeeder::class);
        factory(App\Article::class,10)->create();
    }
}
