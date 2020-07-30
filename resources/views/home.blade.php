<?php use App\Faq; 
?>
@extends('layout')
@include('header')
@section('content')


   {!! $home->description !!} 
   <!-- other-facilities section starts here -->

<section class="other-facilities">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h3 class="section-heading">Looking for something else?</h3>
			</div>
			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon">
						</div>
					</div>
					<p class="other-facilities-heading">Pet insurance</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-2">
						</div>
					</div>
					<p class="other-facilities-heading">Motorbike insurance</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-3">
						</div>
					</div>
					<p class="other-facilities-heading">Mortgages</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-4">
						</div>
					</div>
					<p class="other-facilities-heading">Loans</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-5">
						</div>
					</div>
					<p class="other-facilities-heading">Credit cards</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-6">
						</div>
					</div>
					<p class="other-facilities-heading">Mobile phones</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-7">
						</div>
					</div>
					<p class="other-facilities-heading">Public liability insurance</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-8">
						</div>
					</div>
					<p class="other-facilities-heading">Mortgages</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap flex-end">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-9">
						</div>
					</div>
					<p class="other-facilities-heading">Mortgages</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap flex-end">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-10">
						</div>
					</div>
					<p class="other-facilities-heading">Mortgages</p>
				</a>
			</div>

			<div class="col-md-3 col-6">
				<a href="javascript:void(0);" class="other-facilities-wrap flex-end">
					<div class="other-facilities-wrapper">
						<div class="other-facilities-icon icon-11">
						</div>
					</div>
					<p class="other-facilities-heading">Mortgages</p>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- other-facilities section ends here -->
   {!! $home->description2 !!} 
   {!! $home->description3 !!} 
   <section class="powerpro-section section-3 section-8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="powerpro-sec-content">
            <h3 class="section-heading">Lorem Ipsum is simply dummy</h3>
            <p class="section-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
          </div>
          <div id="accordion">
            <?php 
           
            $faqs = faq::all(); ?>
            @foreach ($faqs as $key => $faq)
            <div class="card">
              <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapse{{$key}}">
                  {{$faq->faq_title}}
                </a>
              </div>
              <div id="collapse{{$key}}" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  {!! $faq->faq_description !!}
                </div>
              </div>
            </div>
            @endforeach
             
          </div>
        </div>
      </div>
    </div>
  </section>
   {!! $home->description4 !!} 




@endsection
 