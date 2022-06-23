<?php

namespace Database\Seeders;
use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'title' => 'Facilitate trade exchange and achieve customer satisfaction',
            'rank' => '1', 

        ],   

        [
            'title' => 'Contribute to the security and protection of society',
            'rank' => '2',
                
        ], 

       [
            'title' => 'Generate revenue',
            'rank' => '3',                
       ], 

       [
            'title' => 'Achieving institutional excellence',
            'rank' => '4',                
       ],
       
       [
            'title' => 'Enhancing the effectiveness and efficiency of risk management',
            'rank' => '5',         
       ],

       [
            'title' => 'Infrastructure improvement and process digitization',
            'rank' => '6',                
       ],

       [
           'title' => 'Developing the administrative system and internal communication',
           'rank' => '7',                                
       ],

       [
           'title' => 'Infrastructure improvement and process digitization',
           'rank' => '8',                                
        ]);
    }        
}
