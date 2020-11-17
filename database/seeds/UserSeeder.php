<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
	        ['email' => 'admin@email.com', 'nama' => 'admin', 'nohp' => '083876854003', 'alamat' => 'pandeglang'],
	        ['email' => 'users@email.com', 'nama' => 'users', 'nohp' => '083876854003', 'alamat' => 'pandeglang'],
            ['email' => 'rahmat@email.com', 'nama' => 'rahmat', 'nohp' => '083876854003', 'alamat' => 'pandeglang'],
	    ];

	    User::insert($user);
    }
}
