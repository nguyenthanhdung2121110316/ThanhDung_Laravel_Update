@extends('layouts.site')
@section('content')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($all_product as $key => $product)
						<a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{ asset('uploads/product/' . $product->image) }}" alt="" />
											<h2>{{number_format($product->price).' '.'VND'}}</h2>
											<p>{{$product->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
										</div>
										<a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}">
										<div class="product-overlay">
											<div class="overlay-content">
												<img src="{{ asset('uploads/product/' . $product->image) }}" alt="" />
												<h2>{{number_format($product->price).' '.'VND'}}</h2>
												<p>{{$product->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
											</div>
										</div>
										</a>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
						</div>
						</a>
						@endforeach
					</div><!--features_items-->

@endsection