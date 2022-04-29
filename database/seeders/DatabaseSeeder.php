<?php

namespace Database\Seeders;

use App\Models\UserW;
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
        // \App\Models\User::factory(10)->create();

        $user= new UserW();
        $user->name="Edwin";
        $user->email="edmendez1105@gmail.com";

        $user->save();

        $user2= new UserW();
        $user2->name="Lina";
        $user2->email="lina25@gmail.com";

        $user2->save();

    }
}
