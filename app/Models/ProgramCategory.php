<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    use HasFactory;
    protected $table = "programs_category";
    protected $fillable = [
        'title', 'program_id','rank'
    ];

    public function program()
    {
        return $this->belongTo(Program::class);
    }

    public function ActivitySectorProjects()
    {
        return $this->hasMany(ActivitySectorProject::class);
    }
}
