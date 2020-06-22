<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Project;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class,10000)->create();
        // factory(Category::class,1000)->create();
        factory(Project::class,1000)->create();

        // $this->call(UserSeeder::class);
         $this->call([
             AlexandrainfosTableSeeder::class,
             ContactsTableSeeder::class,
             ]);
    }
}
