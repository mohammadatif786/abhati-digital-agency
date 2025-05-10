<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function index()
    {
        $categories = Category::get();

        return $categories;
    }

    public function store(array $data)
    {
        $response = Category::create($data);

        return $response;
    }

    public function delete($id)
    {
        $response = Category::findOrfail($id)->delete();

        return $response;
    }
}
