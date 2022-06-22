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
            'name' => 'محمد الدوسري',
        ]);

        PurchaseDepartment::create([
            'name' => 'فهد السهلي',
        ]);

        PurchaseDepartment::create([
            'name' => 'مساعد العنيبي',
        ]);

        PurchaseDepartment::create([
            'name' => 'محمد الدخيل',
        ]);

        PurchaseDepartment::create([
            'name' => 'احمد المرشد',
        ]);

        PurchaseDepartment::create([
            'name' => 'صالح الجربوع',
        ]);

        PurchaseDepartment::create([
            'name' => 'عبد الله السحيباني',
        ]);

        PurchaseDepartment::create([
            'name' => 'عمر الفهد',
        ]);

        PurchaseDepartment::create([
            'name' => 'عمر النفيعي',
        ]);

    }
}
