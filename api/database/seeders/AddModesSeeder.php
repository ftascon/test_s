<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddModesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mode')->insert([
            [
                'name' => "Groups + Knock Out",
            ],[
                'name' => "Round Robin",
            ],[
                'name' => "Knock Out",
            ],[
                'name' => "Groups",
            ]
        ]);
    }
}
