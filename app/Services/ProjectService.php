<?php

namespace App\Services;

use App\Repositories\ProjectRepository;
use App\Traits\ImageTrait;

class ProjectService
{
    use ImageTrait;

    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * Get all project data from ProjectRepository
     */
    public function getAllProjects()
    {
        return $this->projectRepository->index();
    }

    /**
     * Store project data in database
     */
    public function createProject(array $data)
    {
        $data['image'] = $this->storeUpdateImage($data['image']);
        return $this->projectRepository->store($data);
    }

    /**
     * Edit project
     */
    public function editProject($id)
    {
        return $this->projectRepository->edit($id);
    }

    /**
     * Delete project data
     */
    public function deleteProject($id, $oldImage)
    {
        // Delete old image
        if ($oldImage && file_exists(public_path('media/' . $oldImage))) {
            unlink(public_path('media/' . $oldImage));
        }

        return $this->projectRepository->destroy($id);
    }
}
