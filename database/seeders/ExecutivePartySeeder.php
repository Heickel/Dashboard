<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExecutiveParty;

class ExecutivePartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExecutiveParty::create([
            'name' => 'ExecParty 1',
        ]);
        ExecutiveParty::create([
            'name' => 'ExecParty 2',
        ]);
        ExecutiveParty::create([
            'name' => 'ExecParty 3',
        ]);
        ExecutiveParty::create([
            'name' => 'ExecParty 4',
        ]);
        ExecutiveParty::create([
            'name' => 'ExecParty 5',
        ]);
    }
}
