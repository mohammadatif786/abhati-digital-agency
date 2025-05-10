<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public  function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $categories = $this->categoryService->getCategory();

        return view('category.index', compact('categories'));
    }

    public function store(CategoryFormRequest $request)
    {
        $response = $this->categoryService->storeCategory($request->all());

        return response()->json(['success' => 'Category added successfully!']);
    }

    public function showModal()
    {
        return view('category.modal.show')->render();
    }

    public function delete($id)
    {
        $response = $this->categoryService->deleteCategory($id);

        return response()->json([
            'message' => 'success',
            'status' => 200,
        ]);
    }
}
