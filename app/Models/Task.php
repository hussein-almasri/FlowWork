<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Task extends Model
{
    protected $fillable = [
        'name',
        'deadline',
        'priority',
        'project_id',
        'status',
    ];

    /**
     * العلاقة مع المشروع
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
