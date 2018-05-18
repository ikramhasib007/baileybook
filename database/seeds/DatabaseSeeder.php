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
        $this->call([
            UsersTableSeeder::class,
            LanguagesTableSeeder::class,
            ProgrammingLanguagesTableSeeder::class,
            DevelopersTableSeeder::class,
            CategoriesTableSeeder::class,
            TestPostsTableSeeder::class
        ]);
    }
}
