<?php

namespace App\Http\Controllers;
use App\Http\Requests\PageRequestValidation;
use Illuminate\Http\Request;
// use Illuminate\Http\PageRequestValidation;
use App\Page;

class AdminController extends Controller
{
    //

     public function index()
    {
    //   return view('admin.dashboard');
    return view('admin.adminDashboard');
    }

    public function create()
    {
      return view('admin.Pages.create');
    }

    public function store(PageRequestValidation $request)
    {
        $page = new Page();
        $page->title = $request->title;
        $page->description = $request->description;
        $page->description2 = $request->description2;
        $page->description3 = $request->description3;
        $page->description4 = $request->description4;
        $page->save();
        return redirect('admin/pages')->with('success','Page created successfully.');
    }

    public function pagelist()
    {
        $pages = Page::all();
       return view('admin.Pages.pagelisting',compact('pages'));
    }

    public function show(Request $request, $slug)
    {
       
        $page = Page::where('slug', $slug)->first();

       
        if($page->status ==0 || $page == null){
            return abort(404);
        }
        // dd($page->id);
        if($page->id === 1){
            return redirect('/');
        }
        return view('admin.Pages.cms', compact('page')); 
         
    }


    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->first();
        // dd($page->title);
        return view('admin.Pages.edit', compact('page')); 
    }
    public function update(PageRequestValidation $request, $slug)
    {
// dd($slug);
        $page = Page::where('slug', $slug)->first();

        $page->update($request->all());

        return redirect('admin/pages')->with('success','Page updated successfully.');
    }

    public function destroy($slug)
    {

        $page = Page::where('slug', $slug)->first();
        $page->delete();
        
  
        return redirect('admin/pages')->with('success','Page deleted successfully.');
    }

    public function status($slug)
    {
        $page =Page::where('slug', $slug)->first();
        if(!empty($page)){
            $page->status = $page->status == 1 ? 0 : 1;
            $page->save();
           return redirect('admin/pages')->with('success','Page status updated successfully.');
         }
       
    }


}
