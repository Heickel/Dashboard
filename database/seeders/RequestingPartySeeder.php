<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequestingParty;

class RequestingPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestingParty::create([
            'name' => 'الاتصال المؤسسي',
        ]);

        RequestingParty::create([
            'name' => 'الايراد ات',
        ]);

        RequestingParty::create([
            'name' => 'ادارة المخاطر',
        ]);

        RequestingParty::create([
            'name' => 'ادارة التقنية',
        ]);

        RequestingParty::create([
            'name' => 'الادارة الهندسية',
        ]);

        RequestingParty::create([
            'name' => 'مكتب التحول',
        ]);

        RequestingParty::create([
            'name' => 'ادارة التشغيل',
        ]);

        RequestingParty::create([
            'name' => 'الموارد البشرية',
        ]);

        RequestingParty::create([
            'name' => 'ادارة الوسائل',
        ]);

        RequestingParty::create([
            'name' => 'الإدارة القانونية',
        ]);



    }
}
