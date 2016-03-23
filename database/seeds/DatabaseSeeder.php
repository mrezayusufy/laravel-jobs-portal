<?php

use App\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(User::class)->create([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123',
            'role'  => 'admin'
        ]);

        $this->call(CategoriesSeeder::class);
	    $this->call(UsersTableSeeder::class);

	    Model::reguard();
    }
}
