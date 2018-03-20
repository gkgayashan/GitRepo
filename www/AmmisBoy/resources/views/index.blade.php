@extends('layout')
@section('content')
	<div class="row row-fluid">
		<div class="col-sm-12">
			@include('slideShow.slideShow')
		</div>
	</div>
	<div class="container">
		<div class="row row-fluid mt-10 mb-10">
			<div class="col-sm-12">
				@include('products.newArrivals')
			</div>
		</div>
	</div>
	<!-- <div class="container">
		<div class="row row-fluid mb-6 pt-6">
			@include('products.Special')
		</div>
	</div>	 -->					
	<div class="container-full" style="margin-bottom:80px">
		@include('products.add')
	</div>
	
@endsection