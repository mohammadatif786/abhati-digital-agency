<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServicePoint extends Model
{
    protected $table = 'service_points';

    protected $fillable = ['service_id', 'point', 'point_description'];

    /**
     * Get the service that owns the ServicePoint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
