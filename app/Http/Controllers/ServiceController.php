<?php

namespace App\Http\Controllers;

use App\Services\ServicePointService;
use Illuminate\Http\Request;
use App\Services\ServiceService;

class ServiceController extends Controller
{
    protected $serviceService;
    protected $servicePointService;

    public function __construct(ServiceService $serviceService, ServicePointService $servicePointService)
    {
        $this->serviceService = $serviceService;
        $this->servicePointService = $servicePointService;
    }

    /**
     * Fetch All Service Data through services
     */
    public function index()
    {
        $services = $this->serviceService->getAllServices();

        //For API Response
        if (request()->expectsJson()) {
            return response()->json($services);
        }

        return view('services.index', ['services' => $services]);
    }

    /**
     * Store serivce
     */
    public function store(Request $request)
    {
        $storeService = $this->serviceService->createService($request->all());

        if (request()->expectsJson()) {
            return response()->json($storeService);
        }

        return redirect()->route('services.index');
    }

    /**
     * Get id from service for edit
     */
    public function show($id)
    {
        $showService = $this->serviceService->getServiceId($id);
        $servicePoints = $this->servicePointService->getServicePoint($id);
        $serviceImages = $this->serviceService->getServiceImages($id);

        if (request()->expectsJson()) {
            return response()->json($showService);
        }


        return view(
            'services.show',
            [
                'service' => $showService,
                'servicePoints' => $servicePoints,
                'serviceImages' => $serviceImages
            ]
        );
    }

    /**
     * Update Service
     */
    public function update(Request $request, $id, $oldImage)
    {

        $updateService = $this->serviceService->updateService($request->all(), $id, $oldImage);

        if (request()->expectsJson()) {
            return response()->json($updateService);
        }

        return redirect()->back();
    }

    /**
     * Store Serive Image
     */
    public function storeServiceImage(Request $request, $id)
    {
        $storeImage = $this->serviceService->storeImage($request->all(), $id);

        if (request()->expectsJson()) {
            return response()->json($storeImage);
        }
        return redirect()->back();
    }

    /**
     * Edit Image
     */
    public function editImage($id)
    {
        $editImage = $this->serviceService->editServiceImage($id);

        if (request()->expectsJson()) {
            return response()->json($editImage);
        }

        return view('services.edit-service-image', ['image' => $editImage]);
    }

    /**
     * update service image
     */
    public function updateServiceImage(Request $request, $id, $oldImage)
    {
        $updateServiceImage = $this->serviceService->updateServiceImage($request->all(), $id, $oldImage);

        if (request()->expectsJson()) {
            return response()->json($updateServiceImage);
        }

        return redirect()->back();
    }

    /**
     * Remove service
     */
    public function destory($id, $image)
    {
        $deleteService = $this->serviceService->deleteService($id, $image);

        if (request()->expectsJson()) {
            return response()->json($deleteService);
        }

        return redirect()->route('services');
    }

    /**
     * Delete service image
     */

    public function deleteServiceImage($id, $oldImage)
    {
        $deleteServiceImage = $this->serviceService->deleteServiceImage($id, $oldImage);

        if (request()->expectsJson()) {
            return response()->json($deleteServiceImage);
        }

        return redirect()->back();
    }
}
