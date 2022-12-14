<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(ExecutivePartySeeder::class);
        $this->call([
            PurchaseDepartmentSeeder::class,
        ]);
        $this->call(RequestingPartySeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call([
            ProgramSeeder::class,
            ProgramCategorySeeder::class,
            ActivitySectorProjectSeeder::class,
        ]);
    }
}
