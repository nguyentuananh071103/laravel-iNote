<?php

namespace App\Repository;

use App\Models\Category;

class CategoryRepository
{
    public function getAll()
    {
        $categories = Category::all();
        return $categories;
    }

    public function create($request)
    {
        $data = $request->only('name','description','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $category = Category::query()->create($data);
        return $category;
    }

    public function store($request)
    {
        $data = $request->only('name','request');
        Category::query()->create();
    }

    public function getById($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

}
