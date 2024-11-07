<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with(['admin'])
            ->latest()
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();
        return view('backend.category.index', compact('categories'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->admin_id = auth()->guard('admin')->id();
        $category->save();

        flash()->success('Category Added successfully.');
        return back();
    }


    public function edit($id)
    {

        $category = Category::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->admin_id = auth()->guard('admin')->id();
        $category->save();

        flash()->success('Category updated successfully.');

        return redirect()->route('category.index');
    }




    public function destroy(Request $request,$id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        flash()->success('Category Deleted successfully.');
        return back();
    }
}
