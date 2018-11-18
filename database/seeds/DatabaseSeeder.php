<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cast::class,15)->create();
        factory(App\User::class,15)->create();
        factory(App\Director::class,15)->create();
        factory(App\Movie::class,25)->create();
//         $this->call(UsersTableSeeder::class);
    }
}
