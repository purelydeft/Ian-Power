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
                    <a class="nav-link add-page-btn" href="{{ route('blogcat.new')}}">Add New Category</a>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Category Listing</h5>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr><th>No.</th><th>Category Name</th><th>Action</th></tr>
                    @foreach ($Cats as $key => $Cat) 
                  
                    <tr>
                    <th scope="col">{{ $key+1 }}</th>
                        <th scope="col"><a class="nav-link">{{ $Cat->Cat_title }}</a></th>
                   
                        <th scope="col"><form action="{{ route('delete_cat',$Cat->cat_slug) }}" method="POST">@csrf
                            @method('DELETE')
                            <a href="{{ route('blogcat.edit',$Cat->cat_slug) }}"> <span class="fas fa-edit"></span></a>
                            <button type="submit"  ><span class="fas fa-trash"></span></button>
                        </form></th>
                        <th>
                            @if($Cat->status)
                            <span onclick="event.preventDefault(); document.getElementById('form-completed-{{$Cat->id}}').submit()" class="fas fa-check" style="color:green"></span>
                            
                            @else
                        <span onclick="event.preventDefault(); document.getElementById('form-completed-{{$Cat->id}}').submit()" class="fas fa-check" style="color:gray"></span>
                            @endif
                        <form style="display:none" id="{{'form-completed-'.$Cat->id}}" action="{{ route('category-status',$Cat->cat_slug)}}" method="post">
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