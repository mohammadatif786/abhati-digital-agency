<?php

namespace App\Services;

use App\Repositories\ServiceRepository;

class ServiceService
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Get All Service from Service Repository
     */
    public function getAllServices()
    {
        return $this->serviceRepository->getAll();
    }

    /**
     * Create Service
     */
    public function createService(array $data)
    {
        if (isset($data['image'])) {
            $data['image'] = $this->storeUpdateImage($data['image']);
        }
        return $this->serviceRepository->create($data);
    }


    /**
     * Get service id
     */
    public function getServiceId($id)
    {
        return $this->serviceRepository->edit($id);
    }

    /**
     * Update Service
     */
    public function updateService(array $data, $id, $oldImage)
    {
        $data['id'] = $id;

        if (isset($data['image'])) {
            $data['image'] = $this->storeUpdateImage($data['image'], $oldImage);
        }

        return $this->serviceRepository->update($data);
    }

    /**
     * Get Service Images
     */
    public function getServiceImages($id)
    {
        return $this->serviceRepository->getImagaes($id);
    }

    /**
     * Store Service Image
     */
    public function storeImage(array $data, $id)
    {
        $data['service_id'] = $id;

        if (isset($data['image_path'])) {
            $data['image_path'] = $this->storeUpdateImage($data['image_path']);
        }

        return $this->serviceRepository->storeServiceImage($data);
    }

    /**
     * Edit service image
     */
    public function editServiceImage($id)
    {
        return $this->serviceRepository->editImage($id);
    }

    public function updateServiceImage(array $data, $id, $oldImage)
    {
        $data['id'] = $id;

        if (isset($data['image'])) {
            $data['image'] = $this->storeUpdateImage($data['image'], $oldImage);
        }

        return $this->serviceRepository->updateServiceImage($data);
    }


    /**
     * Store and update image
     */
    public function storeUpdateImage($name, $oldImage = null)
    {
        // Old Image Delete
        if ($oldImage && file_exists(public_path('media/' . $oldImage))) {
            unlink(public_path('media/' . $oldImage));
        }

        // Naya Image Save
        $filename = time() . '-' . $name->getClientOriginalName();
        $name->move(public_path('media'), $filename);

        // File Path Return
        return $filename;
    }

    /**
     * Delete service
     */
    public function deleteService($id, $image)
    {
        if ($image && file_exists(public_path('media/' . $image))) {
            unlink(public_path('media/' . $image));
        }

        return $this->serviceRepository->destroy($id);
    }

    /**
     * Delete service image
     */
    public function deleteServiceImage($id, $image)
    {
        if ($image && file_exists(public_path('media/' . $image))) {
            unlink(public_path('media/' . $image));
        }

        return $this->serviceRepository->destroyServiceImage($id);
    }
}
