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
            'name' => 'ExecParty 2',
            'name' => 'ExecParty 3',
            'name' => 'ExecParty 4',
            'name' => 'ExecParty 5',
        ]);
    }
}
