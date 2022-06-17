<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'program',
        'program_categorie',
        'program_sub_categorie',
        'code',
        'name',
        'type',
        'purchasing_officer',
        'requesting_part',
    ];
   
}
