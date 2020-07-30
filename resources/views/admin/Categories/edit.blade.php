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
    <form action="{{route('blogcat.update',$BlogCat->cat_slug)}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Category Title</label>
      <input type="text" class="form-control" id="Cat_title" placeholder="Enter Category title" name="Cat_title" value="{{$BlogCat->Cat_title}}">
        @error('Cat_title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">Category Description:</label>
        <textarea name="Cat_description" id="Cat_description">{{$BlogCat->Cat_description}}</textarea>
        @error('Cat_description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
     
   
      <input type="submit" class="btn btn-primary" value="update">
    </form>
  </div>
</form>
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace( 'Cat_description' );
    editor1.config.allowedContent = true;
    
  </script>


@endsection