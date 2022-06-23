<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'rank'
    ];

    public function ProgramsCategory()
    {
        return $this->hasMany(ProgramCategory::class);
    }
}
