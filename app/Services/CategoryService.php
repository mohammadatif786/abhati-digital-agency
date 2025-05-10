<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getCategory()
    {
        $categories = $this->categoryRepository->index();

        return $categories;
    }

    public function storeCategory(array $data)
    {
        $response = $this->categoryRepository->store($data);

        return redirect()->back();
    }

    public function deleteCategory($id)
    {
        $response = $this->categoryRepository->delete($id);
    }
}
