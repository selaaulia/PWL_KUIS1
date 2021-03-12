<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Customer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            MemberSeeder::class,
            SupplierSeeder::class,
            CustomerSeeder::class,
        ]);
        Supplier::factory(10)->create();
        Member::factory(12)->create();
        Product::factory(18)->create();
        Customer::factory(17)->create();
    }
}
