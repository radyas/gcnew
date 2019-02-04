<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'sliitgc@gmail.com',
            'ign' => 'system_admin',
            'phone' => '0',
            'status' => '1',
            'created_by' => '1',
            'user_type' => '1',
            'password' => bcrypt('Admin@Sliitgc.lk'),
        ]);
    }
}
