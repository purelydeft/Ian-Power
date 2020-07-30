@extends('admin.adminLayout')
@section('content')
<?php 
use App\Faq;
$faqs = faq::all(); ?>

{{-- @forelse ($faqs as $faq)
<li>{{$faq->faq_title}}</li>
@empty
    
@endforelse --}}
<div class="container">

    <ul class="form-group">
        @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

            <div class="col-md-12">
                <div class="add-page-btn-wrap">
                    <a class="nav-link add-page-btn" href="{{ route('pages.new')}}">Add New FAQ</a>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Faq Listing</h5>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr><th>No.</th><th>Faq Name</th><th>Action</th></tr>
                    @foreach ($faqs as $key => $faq) 
                  
                    <tr>
                    <th scope="col">{{ $key+1 }}</th>
                        <th scope="col"><a class="nav-link">{{ $faq->faq_title }}</a></th>
                   
                        <th scope="col"><form action="{{ route('delete_faq',$faq->id) }}" method="POST">@csrf
                            @method('DELETE')
                            <a href="{{ route('faq.edit',$faq->id) }}"> <span class="fas fa-edit"></span></a>
                            <button type="submit"  ><span class="fas fa-trash"></span></button>
                        </form></th>
                        
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