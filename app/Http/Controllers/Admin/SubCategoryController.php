<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Categories $categories)
    {
        $subCate = Categories::where('parent_id' ,'!=',$categories->parent_id)->paginate(10);
        $subCates = Categories::where('parent_id' ,'=',$categories->parent_id)->get();
        // dd($subCate);
        return view('Admin.Categories.subindex')->with([
            "subCate" => $subCate,
            "subCates" => $subCates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Categories.subindex');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = [
                "name" => $request->name,
                "slug" => $request->slug,
                "sortdescription" => $request->sortdescription,
                "description" => $request->description,
                "parent_id" => $request->parent_id,
                "status" => $request->status
            ];
            $subCate = Categories::create($data);
            return redirect()->back()->with('Thêm danh mục con thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('Thêm danh mục con thất bại , vui lòng kiểm tra thông tin !', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $cate = Categories::where('id',$id)->first();
        // dd($cate);
        return view('Admin.Categories.subindex');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
