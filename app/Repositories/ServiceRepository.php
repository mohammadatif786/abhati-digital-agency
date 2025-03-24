<?php

namespace App\Repositories;

use App\Models\Service;
use App\Models\ServiceImages;

class ServiceRepository
{

    /**
     * Get service from database
     */
    public function getAll()
    {
        return Service::all();
    }

    /**
     * Store service data in database
     */
    public function create(array $data)
    {
        return Service::create($data);
    }

    /**
     * Edit service
     */
    public function edit($id)
    {
        return Service::findOrfail($id);
    }

    /**
     * Update Service
     */
    public function update(array $data)
    {
        $updateService = Service::findOrfail($data['id']);
        $updateService->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
        ]);

        return $updateService;
    }

    /**
     * get Imagaes
     */
    public function getImagaes($id)
    {
        return ServiceImages::where('service_id', $id)->get();
    }

    /**
     * Store Service Image
     */
    public function storeServiceImage(array $data)
    {
        return ServiceImages::create($data);
    }

    /**
     * edit service image
     */
    public function editImage($id)
    {
        return ServiceImages::findOrfail($id);
    }

    /**
     * update service image
     */
    public function updateServiceImage(array $data)
    {

        $updateServiceImage = ServiceImages::findOrfail($data['id']);
        $updateServiceImage->update([
            'image_path' => $data['image'],
        ]);

        return $updateServiceImage;
    }


    /**
     * Delete service from database
     */
    public function destroy($id)
    {
        return Service::findOrfail($id)->delete();
    }

    /**
     * Delete service image
     */
    public function destroyServiceImage($id)
    {
        return ServiceImages::findOrfail($id)->delete();
    }
}
