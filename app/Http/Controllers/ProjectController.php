<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Display Project Data from ProjectService
     */
    public function index()
    {
        $projects = $this->projectService->getAllProjects();

        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Send project form data to ProjectService
     */
    public function store(Request $request)
    {
        $storeProject = $this->projectService->createProject($request->except('_token'));

        if (request()->expectsJson()) {
            return response()->json($storeProject);
        }

        return redirect()->route('project.index');
    }

    /**
     * Show project data for edit
     */
    public function show($id)
    {
        $showProject = $this->projectService->editProject($id);

        return view('project.show', ['project' => $showProject]);
    }

    /**
     * Delete project data
     */
    public function deleteProject($id, $oldImage)
    {
        $deleteProject = $this->projectService->deleteProject($id, $oldImage);

        if (request()->expectsJson()) {
            return response()->json($deleteProject);
        }

        return redirect()->route('project.index');
    }
}
