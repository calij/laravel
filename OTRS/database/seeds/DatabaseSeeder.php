<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Jasir',
            'email' => 'jasircali@gmail.com',
            'password' => bcrypt('maxamed'),
        ]);
    }
}
