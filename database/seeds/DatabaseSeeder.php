<?php

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
       DB::table('users')->insert([
          'name' => 'administrator',
          'email' => 'admin@vleugels.be',
          'password' => bcrypt('vleugels'),
          'admin' => 1
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
