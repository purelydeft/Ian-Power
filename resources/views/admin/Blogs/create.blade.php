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
<form role="form"
class="form-edit-add"
action=""
method="POST" enctype="multipart/form-data">
<!-- PUT Method if we are editing -->

<!-- CSRF TOKEN -->
{{ csrf_field() }}

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@php
$count=1;

@endphp

<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Name</label>
   <input  type="text" class="form-control" name="name" placeholder="Name">
</div>

<div class="form-group  col-md-12 ">
   <label class="control-label" for="name">Image</label>
   <input  type="file" class="form-control" name="image" accept='image/*'>
</div>

<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Short Desc</label>
   <textarea class="form-control" name="short_desc"></textarea>
</div>  

<div class="form-group  col-md-12 ">
    <label class="control-label" for="name">Description</label>
    <textarea class="form-control richTextBox" id="richtextdescription" class="form-control" name="description"></textarea>
</div>  
   
{{-- <div class="form-group  col-md-12 cust-service">
    <span class="headingForPackages">Select BlogsubCategory</span>
    @foreach($blogsubcategorydata as $blogsubcategory)
      <div class="form-group  cst-inline-checkboxes">
        <input type="checkbox" id="blogsubcategory{{$blogsubcategory->id}}" name="blogsubcategory_id[]" value="{{$blogsubcategory->id}}">
        <label for="blogsubcategory{{$blogsubcategory->id}}">{{$blogsubcategory->name}}</label>
      </div> 
    @endforeach
 </div> --}}

<div class="panel-footer">
    <button type="submit" class="btn btn-primary save">Submit</button>
</div>

</form>

  </div>
</form>
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace( 'Cat_description' );
    editor1.config.allowedContent = true;
    
  </script>

@endsection