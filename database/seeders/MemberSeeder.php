<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name'=> 'Johnny William',
            'job' => 'CO-Founder',
            'info' => 'Dia adalah seorang CO-Founder sixteen clothing',
            'image' => 'assets/images/team_01.jpg'
        ]);
    }
}
