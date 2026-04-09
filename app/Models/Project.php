<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'deadline',
    ];
    public function team()
    {
         return $this->belongsToMany(TeamMember::class, 'project_team');
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

}
