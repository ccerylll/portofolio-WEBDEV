<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'tech_stack',
        'project_url',
        'github_url',
        'completed_at',
    ];

    protected $casts = [
        'completed_at' => 'date',
    ];
}
