<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    /**
     * Create a new controller instance.
     */

    public function index(Categories $categories)
    {
        $cate = Categories::where('parent_id', '=', $categories->parent_id)->paginate(10);
        // dd($cate);
        return view('Admin.Categories.index')->with(
            [
                "cate" => $cate
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Categories.index');
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
                // "parent_id" => $request->parent_id,
                "status" => $request->status
            ];
            $cate = Categories::create($data);
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
        //
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
