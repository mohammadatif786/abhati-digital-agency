<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePoint extends Model
{
    protected $table = 'service_points';

    protected $fillable = ['service_id', 'point', 'point_description'];
}
