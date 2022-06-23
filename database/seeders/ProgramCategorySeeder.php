<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramCategory;


class ProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramCategory::create([
            'title' => 'Trade Facilitation Program',
            'rank' => '1',
            'program_id' => '1',    
        ],
        [
            'title' => 'Customer Service Program',
            'rank' => '2',
            'program_id' => '1',        
        ], 
        [
            'title' => 'International Partnerships Program',
            'rank' => '3',
            'program_id' => '1',        
        ],
        [
            'title' => 'Customs Security Development Program',
            'rank' => '4',
            'program_id' => '2',        
        ],
        [
            'title' => 'Non-tariff revenue generation program',
            'rank' => '5',
            'program_id' => '3',        
        ],
        [
            'title' => 'tax program',
            'rank' => '6',
            'program_id' => '3',        
        ],
        [
            'title' => 'Asset Exploitation Efficiency Program',
            'rank' => '7',
            'program_id' => '3',        
        ],
        [
            'title' => 'Revenue collection program',
            'rank' => '8',
            'program_id' => '3',        
        ],
        [
            'title' => 'Post audit program',
            'rank' => '9',
            'program_id' => '3',        
        ],
        [
            'title' => 'Internal Operations Development Program',
            'rank' => '10',
            'program_id' => '4',        
        ],
        [
            'title' => 'Legal Procedures Development Program',
            'rank' => '11',
            'program_id' => '4',        
        ],
        [
            'title' => 'Strategic Transformation Program',
            'rank' => '12',
            'program_id' => '4',        
        ],
        [
            'title' => 'risk management program',
            'rank' => '13',
            'program_id' => '5',        
        ],
        [
            'title' => 'process digitization program',
            'rank' => '14',
            'program_id' => '6',        
        ],
        [
            'title' => 'Infrastructure Program',
            'rank' => '15',
            'program_id' => '6',        
        ],
        [
            'title' => 'Governance Program and Regulatory Framework',
            'rank' => '16',
            'program_id' => '7',    
        ],
        [
            'title' => 'Work environment and innovation promotion program',
            'rank' => '17',
            'program_id' => '7',        
        ],
        [
            'title' => 'Competency development and retention program',
            'rank' => '18',
            'program_id' => '7',            
        ],
        [
            'title' => 'Technical Department',
            'rank' => '19',
            'program_id' => '8',            
        ],
        [
            'title' => 'media management',
            'rank' => '20',
            'program_id' => '8',    
        ],
        [
            'title' => 'Engineering and Operations Department',
            'rank' => '21',
            'program_id' => '8',    
        ],

        [    'title' => 'other departments',
            'rank' => '22',
            'program_id' => '8',    
        ]);





    }
}
