<?php use App\BlogCategory ; ?>
@extends('admin.adminLayout')
@section('content')

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="col-md-12">
    <div class="add-page-btn-wrap">
        <a class="nav-link add-page-btn" href="">Back</a>
    </div>
</div>
<form role="form" class="form-edit-add" action="{{route('blog.update',$blog->blog_slug)}}" method="POST" enctype="multipart/form-data">
<!-- PUT Method if we are editing -->

<!-- CSRF TOKEN -->
{{ csrf_field() }}



<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Blog Title</label>
<input  type="text" class="form-control" name="blog_title" placeholder="Name" value="{{$blog->blog_title}}">
</div>

<div class="form-group  col-md-12 ">
   <label class="control-label" for="name">Image</label>
   <input  type="file" class="form-control" name="blog_image" accept='image/*'>
</div>

<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Short Desc</label>
   <textarea class="form-control" name="blog_shortDesc">{{$blog->blog_shortDesc}}</textarea>
</div>  

<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Description</label>
    <textarea class="form-control richTextBox" id="blog_fullDesc" class="form-control" name="blog_fullDesc">{{$blog->blog_fullDesc}}</textarea>
</div>  
   
<div class="form-group col-md-12">
        <label class="control-label" for="exampleFormControlSelect2">Select Blog Category</label>
        <select class="form-control" name="category_id">
            {{-- @php $categories = BlogCategory::all();  @endphp --}}
            @foreach($categories as $cat)
        <option value="{{$cat->id}}" {{$blog->category_id == $cat->id ? 'selected=selected' : ''}}>{{$cat->Cat_title}}</option>
               
            @endforeach 
          </select>
      </div>
   

<div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary save">Update</button>
</div>

</form>

  </div>
</form>
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace( 'blog_fullDesc' );
    editor1.config.allowedContent = true;
    
  </script>

@endsection