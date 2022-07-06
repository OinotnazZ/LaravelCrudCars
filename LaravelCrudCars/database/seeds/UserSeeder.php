<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name' => 'Antonio Silva',
            'email' => 'popeye2010@live.com.pt',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'isAdmin' => '1',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
