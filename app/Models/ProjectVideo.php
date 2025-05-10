<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectVideo extends Model
{
    protected $table = 'project_videos';
    protected $fillable = ['project_id', 'video_title', 'video_path'];
}
