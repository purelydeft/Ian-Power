@php use App\BlogCategory; @endphp
@extends('layout')
@include('header')
@section('content')


   {!! $page->description !!} 

   {{-- @php 
   $category = BlogCategory::with('getpostRelation')->get();
   
  //  dd($category);
   @endphp --}}
   

   @empty($$page->description2)
   {!! $page->description2 !!} 
   @endempty

   @empty($$page->description3)
   {!! $page->description3 !!} 
   @endempty

   @empty($$page->description4)
   {!! $page->description4 !!} 
   @endempty
   

 @endsection