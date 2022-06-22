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
            'name' => 'Party 1',
        ]);
        RequestingParty::create([
            'name' => 'Party 2',
        ]);
        RequestingParty::create([
            'name' => 'Party 2',
        ]);
        RequestingParty::create([
            'name' => 'Party 4',
        ]);
        RequestingParty::create([
            'name' => 'Party 5',
        ]);

    }
}
