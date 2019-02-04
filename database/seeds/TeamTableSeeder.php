<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => str_random(10),
            'clan_id' => '1',
            'players' => '1',
            'status' => '0',
            'created_by' => '1',
        ]);
    }
}
