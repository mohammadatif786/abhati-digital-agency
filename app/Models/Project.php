<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'description', 'image', 'complete_year', 'category_id', 'client_name', 'website_url', 'research_and_strategy', 'challenging',];
}
