<?php

namespace App\Http\Controllers\admin;

use App\BlogCategory;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //

    public function index()
    {
       $blogs = Blog::all();
       return view('admin.Blogs.blogList',compact('blogs'));
    }


    public function create()
    {
        $Cats = BlogCategory::all();
        return view('admin.Blogs.create',compact('Cats'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
	        $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            // dd($destinationPath);
	        $image->move($destinationPath, $filename);
    	}
    $blog = Blog::create([
    		'blog_title' => $request['blog_title'],
            'category_id' => $request['category_id'],
            'blog_shortDesc' => $request['blog_shortDesc'],
            'blog_fullDesc' => $request['blog_fullDesc'],
    		'blog_image' => isset($filename) ? $filename : '',
        ]);
        return redirect('admin/blogs')->with('success','Blogs created successfully.');
    }


public function show($slug)
{
    $blog = Blog::where('blog_slug', $slug)->first();
    return view('admin.Blogs.blogdetails', compact('blog')); 
}


public function edit($slug)
{
    $blog = Blog::where('blog_slug', $slug)->first();
    $categories = BlogCategory::all();
        return view('admin.Blogs.edit', compact('blog','categories')); 
}


    public function update(Request $request, $slug)
{
    $blog = Blog::where('blog_slug', $slug)->first();
    $filename = $blog->blog_image;
   
    
    if ($request->hasFile('blog_image')) {
        $image = $request->file('blog_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $img_path = public_path().'/uploads/'.$blog->blog_image;
        if (file_exists($img_path)) {
            unlink($img_path);
        }
        $image->move($destinationPath, $filename);
    }
    $blog->update([
             'blog_title' => $request['blog_title'],
            'category_id' => $request['category_id'],
            'blog_shortDesc' => $request['blog_shortDesc'],
            'blog_fullDesc' => $request['blog_fullDesc'],
    		'blog_image' => isset($filename) ? $filename : '',
    ]);
        return redirect('admin/blogs')->with('success','Blogs updated successfully.');
  
}

public function destroy($slug)
{

    $blog = Blog::where('blog_slug', $slug)->first();
    $blog->delete();
    

    return redirect('admin/blogs')->with('success','Blog deleted successfully.');
}

}