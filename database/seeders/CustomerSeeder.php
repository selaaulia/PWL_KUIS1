<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name'=> "Diva Ardhia",
            'job' => "Mahasiswa",
            'city' => "Malang",
            'phone' => "081231111234"
        ]);
    }
}
