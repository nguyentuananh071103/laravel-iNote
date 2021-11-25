<?php

namespace App\Http\Controllers;

use App\Repositoris\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view("backend.category.list",compact("categories"));
    }

    public function create()
    {
        return view("backend.category.create");
    }
}
