<?php use App\Blog; ?>
@extends('admin.adminLayout')
@section('content')

<div class="container">

    <ul class="form-group">
        @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
        
            <div class="col-md-12">
                <div class="add-page-btn-wrap">
                    <a class="nav-link add-page-btn" href="{{ route('blog.new')}}">Add New Blog</a>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Blog Listing</h5>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr><th>No.</th><th>Blog Name</th><th>Category Name</th><th>Url</th><th>Action</th></tr>
                  @if (count($blogs)>0)
                  @foreach ($blogs as $key => $blog) 
                  
                  <tr>
                  <th scope="col">{{ $key+1 }}</th>
                      <th scope="col"><a class="nav-link" href="{{ route('blogs.display',$blog->blog_slug) }}">{{ $blog->blog_title }}</a></th>
                      <th>
                        {{ $blog->getcatRelation->Cat_title }}
                       
                    </th>
                  <th scope="col"><a class="btn btn-primary" href="{{url('')}}/blogs/{{ $blog->blog_slug }}">{{url('')}}/blogs/{{ $blog->blog_slug }}</a></th>
                      <th scope="col"><form action="{{ route('delete_blog',$blog->blog_slug) }}" method="POST">@csrf
                          @method('DELETE')
                          <a href="{{ route('blog.edit',$blog->blog_slug) }}"> <span class="fas fa-edit"></span></a>
                          <button type="submit"  ><span class="fas fa-trash"></span></button>
                      </form></th>
                      
                      
                  </tr>
              
                 
              @endforeach       
            </tbody>
                  @else
                  <tr><td colspan="5"><div class="no_results"><h3>No result found</h3></div></td></tr>

                  @endif
                 
             
            </table>
        </div>
    </div>
</div>
           
    </ul>
</div>
@endsection