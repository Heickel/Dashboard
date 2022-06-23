<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitySectorProject extends Model
{
    use HasFactory;
    protected $table = "activity_sector_project";
    protected $fillable = [
        'title', 'rank' , 'program_category_id'
    ];

    public function ProgramsCategory()
    {
        return $this->belongTo(ProgramCategory::class);
    }
}
