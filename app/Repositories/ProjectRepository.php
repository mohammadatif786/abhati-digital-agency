<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    //get All Project Data
    public function index()
    {
        return Project::get();
    }

    //store project data
    public function store(array $data)
    {
        return Project::create($data);
    }

    //edit
    public function edit($id)
    {
        return Project::findOrfail($id);
    }
    //update
    public function update(array $data)
    {
        $project = Project::findOrfail($data['id']);
        $project->update($data);
        return $project;
    }

    //destroy
    public function destroy($id)
    {
        return Project::destroy($id);
    }
}
