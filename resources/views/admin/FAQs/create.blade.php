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
    <a class="nav-link add-page-btn" href="{{route('faq.list')}}">Back</a>
    </div>
</div>
    <form action="{{route('faq.store')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Title:</label>
        <input type="text" class="form-control" id="faq_title" placeholder="Enter page title" name="faq_title">
        @error('faq_title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
      <div class="form-group">
        <label for="pwd">FAQ Description:</label>
        <textarea name="faq_description" id="faq-desc"></textarea>
        @error('faq_description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
     
   
      <input type="submit" class="btn btn-primary" value="Publish">
    </form>
  </div>
</form>
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace( 'faq-desc' );
    editor1.config.allowedContent = true;
    
  </script>

@endsection