<?php

namespace App\Http\Controllers;

use App\Services\ServicePointService;
use Illuminate\Http\Request;


class ServicePointsController extends Controller
{

    protected $servicePointServices;

    public function __construct(ServicePointService $servicePointService)
    {
        $this->servicePointServices = $servicePointService;
    }

    /**
     * Store Service Point
     */
    public function create(Request $request, $service_id)
    {
        $storePoint = $this->servicePointServices->createPoint($request->all(), $service_id);

        //For API Response
        if (request()->expectsJson()) {
            return response()->json($storePoint);
        }

        return redirect()->route('show.service', $request->service_id,);
    }

    /**
     * Edit point
     */
    public function edit($id)
    {
        $editPoint = $this->servicePointServices->editPoint($id);

        if (request()->expectsJson()) {
            return response()->json($editPoint);
        }

        return view('services.edit-point', ['editPoint' => $editPoint]);
    }

    /**
     * Update Point
     */
    public function update(Request $request, $id)
    {
        $updatePoint = $this->servicePointServices->updatePoint($request->all(), $id);

        if (request()->expectsJson()) {
            return response()->json($updatePoint);
        }

        return redirect()->back();
    }

    /**
     * Delete Point
     */
    public function delete($id)
    {
        $deletePoint = $this->servicePointServices->deletePoint($id);

        if (request()->expectsJson()) {
            return response()->json($deletePoint);
        }

        return redirect()->back();
    }
}
