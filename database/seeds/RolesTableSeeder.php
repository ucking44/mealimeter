<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 10)->create([
            'user_id' => $this->getRandomUserId()
        ]);

    }

        private function getRandomUserId()
        {
            $user = User::inRandomOrder()->first();
            return $user->id;
        }

}
