<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Paul Kingsley',
            //'last_name' => 'Kingsley',
            'email' => 'paul@king.com'
        ]);

        User::insert([
            'name' => 'Joy Smith',
            //'last_name' => 'Smith',
            'email' => 'joy@smith.com'
        ]);

        factory(User::class, 10)->create();

    }
}
