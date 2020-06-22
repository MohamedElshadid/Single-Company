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
        factory(User::class,100)->create();
        factory(Category::class,50)->create();
        factory(Project::class,70)->create();

        // $this->call(UserSeeder::class);
         $this->call([
             AlexandrainfosTableSeeder::class,
             ContactsTableSeeder::class,
             ]);
    }
}
