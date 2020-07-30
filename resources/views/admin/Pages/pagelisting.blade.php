<?php use App\Page; ?>
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
                    <a class="nav-link add-page-btn" href="{{ route('pages.new')}}">Add New Page</a>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Page Listing</h5>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr><th>No.</th><th>Page Name</th><th>Url</th><th>Action</th><th>Status</th></tr>
                    @foreach ($pages as $key => $page) 
                  
                    <tr>
                    <th scope="col">{{ $key+1 }}</th>
                        <th scope="col"><a class="nav-link" href="{{ route('pages.display',$page->slug) }}">{{ $page->title }}</a></th>
                    <th scope="col"><a class="btn btn-primary" href="{{url('')}}/{{ $page->slug }}">{{url('')}}/{{ $page->slug }}</a></th>
                        <th scope="col"><form action="{{ route('delete_page',$page->slug) }}" method="POST">@csrf
                            @method('DELETE')
                            <a href="{{ route('pages.editpage',$page->slug) }}"> <span class="fas fa-edit"></span></a>
                            <button type="submit"  ><span class="fas fa-trash"></span></button>
                        </form></th>
                        <th>
                            @if($page->status)
                            <span onclick="event.preventDefault(); document.getElementById('form-completed-{{$page->id}}').submit()" class="fas fa-check" style="color:green"></span>
                            
                            @else
                        <span onclick="event.preventDefault(); document.getElementById('form-completed-{{$page->id}}').submit()" class="fas fa-check" style="color:gray"></span>
                            @endif
                        <form style="display:none" id="{{'form-completed-'.$page->id}}" action="{{ route('status-page',$page->slug)}}" method="post">
                        @csrf
                        @method('put')
                        
                        </form>
                        </th>
                    </tr>
                
                   
                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
           
    </ul>
</div>
@endsection