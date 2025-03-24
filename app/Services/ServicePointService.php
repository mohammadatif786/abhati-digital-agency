<?php

namespace App\Services;

use App\Repositories\ServicePointRepository;

class ServicePointService
{

    protected $servicePointRepository;

    public function __construct(ServicePointRepository $servicePointRepository)
    {
        $this->servicePointRepository = $servicePointRepository;
    }

    /**
     * Get All Points with service id
     */
    public function getServicePoint($id)
    {
        return $this->servicePointRepository->index($id);
    }

    /**
     * Create Point
     */
    public function createPoint(array $data, $service_id)
    {
        $data['service_id'] = $service_id;
        return $this->servicePointRepository->store($data);
    }

    /**
     * Edit Point
     */
    public function editPoint($id)
    {
        return $this->servicePointRepository->edit($id);
    }

    /**
     * Update Point
     */
    public function updatePoint(array $data, $id)
    {
        $data['id'] = $id;
        return $this->servicePointRepository->update($data);
    }

    /**
     * Delete Point
     */
    public function deletePoint($id)
    {
        return $this->servicePointRepository->destroy($id);
    }
}
