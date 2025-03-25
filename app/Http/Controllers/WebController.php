<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * index method
     */
    public function index()
    {
        $services = Service::with('servicePoints', 'serviceImages')->get();
        return view('welcome', ['services' => $services]);
    }
    /**
     * Get Service details with id
     */
    public function serviceDetail($id)
    {
        $serviceDetail = Service::with('servicePoints', 'serviceImages')->find($id);
        return view('pages.service-detail', ['service' => $serviceDetail]);
    }
}
