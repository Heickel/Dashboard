<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseDepartment;

class PurchaseDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseDepartment::create([
            'name' => 'Department 1',
        ]);
        PurchaseDepartment::create([
            'name' => 'Department 2',
        ]);
        PurchaseDepartment::create([
            'name' => 'Department 3',
        ]);
        PurchaseDepartment::create([
            'name' => 'Department 4',
        ]);
        PurchaseDepartment::create([
            'name' => 'Department 5',
        ]);

    }
}
