<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['title', 'description', 'image'];

    /**
     * Get all of the service points for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicePoints(): HasMany
    {
        return $this->hasMany(ServicePoint::class, 'service_id', 'id');
    }

    /**
     * Get all of the service images for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviceImages(): HasMany
    {
        return $this->hasMany(ServiceImages::class, 'service_id', 'id');
    }
}
