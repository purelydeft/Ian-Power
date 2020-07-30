<?php

namespace App\Http\Controllers\admin;
use App\BlogCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCatController extends Controller
{
    //

    public function index()
    {
        $Cats = BlogCategory::all();
        return view('admin.Categories.catList',compact('Cats'));
    }

    public function create()
    {
        return view('admin.Categories.create');
    }

    public function store(Request $request)
    {
        $BlogCat = BlogCategory::create($request->all());
        return redirect('admin/category/create')->with('success','Blog Category created successfully.');
    }

    public function edit($slug)
    {
        $BlogCat = BlogCategory::where('cat_slug', $slug)->first();
        // dd($BlogCat->Cat_title);
        return view('admin.Categories.edit',compact('BlogCat'));
    }

    public function update(Request $request,$slug)
    {
        $BlogCat = BlogCategory::where('cat_slug', $slug)->first();

        $BlogCat->update($request->all());
        return redirect('admin/categories')->with('success','Blog Category updated successfully.');
    }

    public function destroy($slug)
    {

        $BlogCat = BlogCategory::where('cat_slug', $slug)->first();
        $BlogCat->delete();
        
  
        return redirect('admin/categories')->with('success','Blog Category deleted successfully.');
    }

    public function status($slug)
    {
        $BlogCat =BlogCategory::where('cat_slug', $slug)->first();
        if(!empty($BlogCat)){
            $BlogCat->status = $BlogCat->status == 1 ? 0 : 1;
            $BlogCat->save();
           return redirect('admin/categories')->with('success','Blog Category status updated successfully.');
         }
       
    }
}
