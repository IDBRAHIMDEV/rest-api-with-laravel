<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\User;
use App\Acte;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Profile::class, 10)->create();
        factory(User::class, 100)->create();
        factory(Acte::class, 50)->create();
    }
}
