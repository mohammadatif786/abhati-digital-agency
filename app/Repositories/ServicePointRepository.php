<?php

namespace App\Repositories;

use App\Models\ServicePoint;

class ServicePointRepository
{
    /**
     * get points with service id
     */
    public function index($id)
    {
        return ServicePoint::where('service_id', $id)->get();
    }

    /**
     * Store Point
     */
    public function store(array $data)
    {
        return ServicePoint::create($data);
    }

    /**
     * Edit Point
     */
    public function edit($id)
    {
        return ServicePoint::findOrfail($id);
    }

    /**
     * Update Point
     */
    public function update(array $data)
    {
        $update = ServicePoint::findOrFail($data['id']);
        $update->update([
            'point' => $data['point'],
            'point_description' => $data['point_description']
        ]);
    
        return $update;
    }

    /**
     * Delete Point
     */
    public function destroy($id)
    {
        return ServicePoint::findOrfail($id)->delete();
    }
}
