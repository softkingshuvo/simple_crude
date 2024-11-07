<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Traits\UploadImageTrait;

class BrandController extends Controller
{
    use UploadImageTrait;

    public function index()
    {
        $brands = Brand::query()->latest()->get();
        return view('backend.brand.index',compact('brands'));
    }

    public function store(StoreBrandRequest $request)
    {

        $data = $request->validated();
        $data['admin_id'] = Auth('admin')->id();
        $imagePath = $this->uploadImage($request->file('image'));
        $data['image'] = $imagePath;

        Brand::create($data);

        return response()->json(['success' => true]);

    }


    public function edit(Brand $brand)
    {
        return view('backend.brand.edit', compact('brand'));
    }


    public function update(UpdateBrandRequest $request, Brand $brand)
    {

        $data = $request->validated();
        $data['admin_id'] = Auth('admin')->id();

        if ($request->hasFile('image')) {
            $this->deleteImage($brand->image);
            $imagePath = $this->uploadImage($request->file('image'));
            $data['image'] = $imagePath;
        }


        $brand->update($data);
        flash()->success('Brand Update successfully.');

        return redirect()->route('brand.index');

    }


    public function destroy(Brand $brand)
    {
        $this->deleteImage($brand->image);
        $brand->delete();
        flash()->success('Brand Deleted successfully.');
        return redirect()->route('brand.index');
    }

    public function dataTable(){

        $brands = Brand::query()->latest()->get();
        return view('backend.brand.datatable', compact('brands'));
    }
}
