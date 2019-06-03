<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Jorge Ulises',
        	'email' => 'jorge2494ulises@gmail.com',
			'password' => bcrypt('24061994'),
            'admin'=> true
        ]);
    }
}
