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
				<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
					<div class="product-slider-title">
						<h3 class="el-heading">Select Your Items</h3>
					</div>
					<div class="caroufredsel-wrap">
						<div class="commerce columns-4">
							<ul class="products columns-4" data-columns="4">
								@foreach($allItems as $item)
								<li class="product">
									<div class="product-container">
										<figure>
											<div class="product-wrap">
												<div class="product-images">
													<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
														<img width="375" height="505" src="{{$item['url']}}" alt=""/>
													</div>
													<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
														<img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
													</div>
													<div class="loop-action">
														<div class="loop-add-to-cart">
															<a href="#" class="add_to_cart_button">
																Add to cart
															</a>
														</div>
													</div>
												</div>
											</div>
											<figcaption>
												<div class="shop-loop-product-info">
													<div class="info-content-wrap">
														<h3 class="product_title">
															<a href="shop-detail-1.html">Quisque libero sagittis</a>
														</h3>
														<div class="info-price">
															<span class="price">
																<span class="amount">
																	&pound;{{$item['price']}}
																</span>
															</span>
														</div>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
								</li>
								@endforeach													
							</ul>
						</div>
						<a href="#" class="caroufredsel-prev"></a>
						<a href="#" class="caroufredsel-next"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection