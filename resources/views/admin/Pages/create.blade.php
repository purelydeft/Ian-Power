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
        <a class="nav-link add-page-btn" href="{{ route('pages.pagelist')}}">Back</a>
    </div>
</div>

{{-- <form action="{{ url}}" style="margin-left:200px"> --}}
    <form action="{{route('pages.store')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter page title" name="title">
        @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">Page Description 1:</label>
        <textarea name="description" id="page-desc"></textarea>
        @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">Page Description 2:</label>
        <textarea name="description2" id="page-desc-2"></textarea>
        @error('description2')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">Page Description 3:</label>
        <textarea name="description3" id="page-desc-3"></textarea>
        @error('description3')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">Page Description 4:</label>
        <textarea name="description4" id="page-desc-4"></textarea>
        @error('description4')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
   
      <input type="submit" class="btn btn-primary" value="Publish">
    </form>
  </div>
</form>
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace( 'page-desc' );
    editor1.config.allowedContent = true;
    var editor2 =  CKEDITOR.replace( 'page-desc-2' );
    editor2.config.allowedContent = true;
    var editor3 = CKEDITOR.replace( 'page-desc-3' );
    editor3.config.allowedContent = true;
    var editor4 = CKEDITOR.replace( 'page-desc-4' );
    editor4.config.allowedContent = true;
  </script>
</div>

@endsection