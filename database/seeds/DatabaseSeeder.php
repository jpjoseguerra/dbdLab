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
        // $this->call(UserSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(RolPermissionTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdvertisementTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(ValorationTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(TransactionTableSeeder::class);

    }
}
