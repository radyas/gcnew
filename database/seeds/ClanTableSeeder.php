<?php

use Illuminate\Database\Seeder;	

class ClanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clans')->insert([
            'name' => str_random(10),
            'status' => '0',
            'created_by' => '1',
        ]);
    }
}
