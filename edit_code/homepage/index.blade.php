@extends('templates.main')

@section('content')
@include('includes/homepage.slide_content')
<div class="clear"></div>
<!-- contet -->
<div id="new-page" class="main-page-news">
	<div class="container">
		<div class="row">
			<!--tintuc-left -->
			<div class="left-fix">
				<div class="col-md-9 col-sm-8 col-xs-12">
					<!-- phan1-tintuc-moitruong -->
					<div class="newss-tt1">
						<div class="row">
							<!-- tintuc -->
							<div class="col-md-6 col-sm-6 col-xs-12 left">
								<!-- Recent news -->
								<div class="tintuc_left">
									<div class="link-block padd-block">
										<a href="" class="tintuc left-news">Tin Tức</a>
										<div class="border-bottom"></div>
									</div>
									<!-- Tin tuc -->
									@if (!count($news_news))
									Không tìm thấy dữ liệu
									@else
									<div class="left-news">
										<div class="text-top">
											<div class="title-text">
												<a href="{{ route('news.show',['id'=>$news_news[0]->id]) }}" title="{{ $news_news[0]->title }}" class="a-link">
													{{ str_limit($news_news[0]->title,$limit = 50, $end = '...') }}
												</a>
											</div>
											<div class="content-text">
												<div class="col-md-5">
													<a href="{{ route('news.show',['id'=>$news_news[0]->id]) }}" title="{{ $news_news[0]->title }}">
														<img src="{{ Storage::disk('local')->url($news_news[0]->title_image) }}" class="img-news" width="167px" >
													</a>
												</div>
												<div class="col-md-7">
													<p class="p-text">{{ $news_news[0]->description }}</p>
													<div class="tag-link">
														<a href="#" class="link-thoisu"> <span class="glyphicon glyphicon-forward"></span> Tin thời sự </a>
													</div>
												</div>
											</div>
										</div>
										<div class="list-block">
											<ul class="tintuc-list">
												<?php foreach ($news_news as $key => $value): ?>
													@if ($key > 0)
													<li ">
														<a href="{{ route('news.show',['id'=>$value->id]) }}" title="{{ $value->title }}"><i class="fa fa-plus-circle "></i>{{ $value->title }}
														</a>
													</li>
													@endif
												<?php endforeach ?>
											</ul>
										</div>
									</div>
									@endif
								</div>
								<!-- End recent news -->
							</div>
							<!--1-->
							<!-- moitruong -->
							<div class="col-md-6 col-sm-6 col-xs-12 right ">
								<div class="tintuc_left ">
									<div class="link-block padd-block ">
										<a href="# " class="tintuc left-news ">Môi trường</a>
										<div class="border-bottom "></div>
									</div>
									@if (!count($news_environment))
									Không tìm thấy dữ liệu
									@else
									<div class="left-news ">
										<div class="text-top ">
											<div class="title-text">
												<a href="{{ route('news.show',['id'=>$news_environment[0]->id]) }}" title="{{ $news_environment[0]->title }}" class="a-link ">{{ str_limit($news_environment[0]->title,$limit = 50,$end = '...') }}</a>
											</div>
											<div class="content-text ">
												<div class="col-md-5 ">
													<a href="{{ route('news.show',['id'=>$news_environment[0]->id]) }}" title="{{ $news_environment[0]->title }}">
														<img src="{{ Storage::disk('local')->url($news_environment[0]->title_image) }}" class="img-news ">
													</a>
												</div>
												<div class="col-md-7 ">
													<p class="p-text ">{{ str_limit($news_environment[0]->description,$limit = 200,'...') }}</p>
													<div class="tag-link ">
														<a href="# " class="link-thoisu "> <span class="glyphicon glyphicon-forward "></span> Tin thời sự </a>
													</div>
												</div>
											</div>
										</div>
										<div class="list-block ">
											<ul class="tintuc-list ">
												<?php foreach ($news_environment as $key => $value): ?>
													@if ($key > 0)
													<li>
														<a href="{{ route('news.show',['id'=>$value->id]) }}" title=" {{ $value->title }} ">
															<i class="fa fa-plus-circle "></i>
															{{ str_limit($value->title,$limit=100,$end = '...') }}
														</a>
													</li>
													@endif
												<?php endforeach ?>
											</ul>
										</div>
									</div>
									@endif
								</div>
								<!-- End evironment news -->
							</div>
							<!--1-->
						</div>
					</div>
					<!--Baner-->
					<div class="banner-info">
						<img src="images/banner5.gif" alt="" class="img-responsive">
					</div>
					<!-- phan2-tintuc-video -->
					<div class="newss-tt1 info-video ">
						<div class="tintuc_left">
							<div class="link-block padd-block video-content">
								<a href="{{-- {{route('video.show',['id'=>$list->title_slug])}} --}}" class="tintuc left-news "> <span class="glyphicon glyphicon-facetime-video"></span> Video chọn lọc </a>
								<div class="border-bottom "></div>
							</div>
								{{-- tao video id khac nhau ko bi trung --}}
							<div class="left-news row">	
								@php
									$count = true;
								@endphp
								@foreach( $video as $key => $list)
									@if ($count == true)
										<div class="col-md-7 col-xs-12 col-sm-7">
											<div class="video-left-one" style="display: inline-block;">
												<!--  <video></video> -->
												<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2">
												</a>
												<a href="{{route('video.show',$list->title_slug)}}" class="h2-text padding-text"{{$list['title']}}></a>
												<h4>
													{{ $list->created_at->diffForHumans() }}
												</h4>
										</div>
										</div>
										@php
											$count=false ;
										@endphp
									@else
									{{-- xet-video trong project-list-video --}}
									{{-- xet truong hop co 5-6 cai video trong project-kit --}}
									<div class="col-md-5 col-xs-12 col-sm-5">
										<div class="project-list-video">
											<div class="video-top"  style="display: inline-block;">
												<div class="row">
													<div class="col-md-5 col-sm-6 col-xs-12">
														<div class="left-img">
															<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2"></a>
														</div>
													</div>
													<div class="col-md-7 col-sm-6 col-xs-12">
														<div class="text-new-2">
															<a href="{{route('video.show',$list->title_slug)}}" class="a-link">{{$list['title']}}</a>
															<div class="padd-bottom">
																<span class="h5-tt pull-left">{{ $list->created_at->diffForHumans() }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="video-top"  style="display: inline-block;">
												<div class="row">
													<div class="col-md-5 col-sm-6 col-xs-12">
														<div class="left-img">
															<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2"></a>
														</div>
													</div>
													<div class="col-md-7 col-sm-6 col-xs-12">
														<div class="text-new-2">
															<a href="{{route('video.show',$list->title_slug)}}" class="a-link">{{$list['title']}}</a>
															<div class="padd-bottom">
																<span class="h5-tt pull-left">{{ $list->created_at->diffForHumans() }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="video-top"  style="display: inline-block;">
												<div class="row">
													<div class="col-md-5 col-sm-6 col-xs-12">
														<div class="left-img">
															<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2"></a>
														</div>
													</div>
													<div class="col-md-7 col-sm-6 col-xs-12">
														<div class="text-new-2">
															<a href="{{route('video.show',$list->title_slug)}}" class="a-link">{{$list['title']}}</a>
															<div class="padd-bottom">
																<span class="h5-tt pull-left">{{ $list->created_at->diffForHumans() }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="video-top"  style="display: inline-block;">
												<div class="row">
													<div class="col-md-5 col-sm-6 col-xs-12">
														<div class="left-img">
															<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2"></a>
														</div>
													</div>
													<div class="col-md-7 col-sm-6 col-xs-12">
														<div class="text-new-2">
															<a href="{{route('video.show',$list->title_slug)}}" class="a-link">{{$list['title']}}</a>
															<div class="padd-bottom">
																<span class="h5-tt pull-left">{{ $list->created_at->diffForHumans() }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="video-top"  style="display: inline-block;">
												<div class="row">
													<div class="col-md-5 col-sm-6 col-xs-12">
														<div class="left-img">
															<a href="{{route('video.show',$list->title_slug)}}"><img src="{{URL::asset($list->title_image)}}" class="img-responsive video-2"></a>
														</div>
													</div>
													<div class="col-md-7 col-sm-6 col-xs-12">
														<div class="text-new-2">
															<a href="{{route('video.show',$list->title_slug)}}" class="a-link">{{$list['title']}}</a>
															<div class="padd-bottom">
																<span class="h5-tt pull-left">{{ $list->created_at->diffForHumans() }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
												
										{{-- copy here --}}
										</div>
									</div>

									@endif
									
									<!-- video-4-->
									@endforeach
								</div>
							</div>
							<!-- row-1-->
						</div>
					<!--Baner-->
					<div class="banner-info">
						<img src="images/banner5.gif" alt="" class="img-responsive">
					</div>
					<!-- phansp+congnghe -->
					<div class="newss-tt1">
						<div class="row">
							<!-- sanpham -->
							<div class="col-md-6 col-sm-6 col-xs-12 left">
								<div class="tintuc_left ">
									<div class="link-block padd-block ">
										<a href="# " class="tintuc left-news ">Sản phẩm</a>
										<div class="border-bottom "></div>
									</div>
									<div class="left-news ">
										@if (!count($news_product))
										<div class="text-top ">
											<div class="left-img ">
												<h3>Không tìm thấy dữ liệu</h3>
											</div>
										</div>
										@else
										<div class="text-top ">
											<div class="left-img ">
												<a href="{{ route('news.show',['id'=>$news_product[0]->id]) }}" title="{{ $news_product[0]->title }}"><img src="{{ Storage::disk('local')->url($news_product[0]->title_image) }}" class="img-news"></a>
											</div>
											<div class="text-new-1 ">
												<div> 
													<a href="{{ route('news.show',['id'=>$news_product[0]->id]) }}" title="{{ $news_product[0]->title }}" class="a-link">{{ str_limit($news_product[0]->title,$limit=60,$end = '...') }}</a> 
												</div>
												<div class="tag-link ">
													<a href="#" class="link-thoisu ">Tin thời sự  <span class="h5-tt pull-right ">{{ Carbon\Carbon::parse($news_product[0]->posted_at)->format('d/m/Y') }}</span></a>
												</div>
												<p class="p-text ">{{ str_limit($news_product[0]->description,$limit=200,$end = '...') }}</p>
											</div>
										</div>
										<div class="list-block ">
											<ul class="tintuc-list ">
												<?php foreach ($news_product as $key => $value): ?>
													@if ($key > 0)
													<li><a href="{{ route('news.show',['id'=>$value->id]) }}" title="{{ $value->title }}"><i class="fa fa-plus-circle "></i>{{ str_limit($value->title,$limit=60,$end = '...') }}</a></li>
													@endif
												<?php endforeach ?>
											</ul>
										</div>
										@endif
									</div>
								</div>
							</div>
							<!--1-->
							<!-- congnghe -->
							<div class="col-md-6 col-sm-6 col-xs-12 right ">
								<div class="tintuc_left ">
									<div class="link-block padd-block ">
										<a href="# " class="tintuc left-news ">Công nghệ</a>
										<div class="border-bottom "></div>
									</div>
									<div class="left-news ">
										@if (!count($news_tech))
										<div class="text-top ">
											<div class="left-img ">
												<h3>Không tìm thấy dữ liệu</h3>
											</div>
										</div>
										@else
										<div class="text-top ">
											<div class="left-img ">
												<a href="{{ route('news.show',['id'=>$news_tech[0]->id]) }}" title="{{ $news_tech[0]->title }} "><img src="{{ Storage::disk('local')->url($news_tech[0]->title_image) }}" class="img-news "></a>
											</div>
											<div class="text-new-1 ">
												<div> <a href="{{ route('news.show',['id'=>$news_tech[0]->id]) }}" title="{{ $news_tech[0]->title }}" class="a-link ">{{ str_limit($news_tech[0]->title,$limit=60,$end = '...') }}</a> </div>
												<div class="tag-link ">
													<a href="# " class="link-thoisu ">Tin thời sự  <span class="h5-tt pull-right ">{{ Carbon\Carbon::parse($news_tech[0]->posted_at)->format('d/m/Y') }}</span></a>
												</div>
												<p class="p-text ">{{ str_limit($news_tech[0]->description,$limit=200,$end = '...') }}</p>
											</div>
										</div>
										<div class="list-block">
											<ul class="tintuc-list">
												<?php foreach ($news_tech as $key => $value): ?>
													@if ($key > 0)
													<li><a href="{{ route('news.show',['id'=>$value->id]) }}" title="{{ $value->title }}"><i class="fa fa-plus-circle "></i>{{ str_limit($value->title,$limit=60) }}</a></li>
													@endif
												<?php endforeach ?>
											</ul>
										</div>
										@endif
									</div>
								</div>
							</div>
							<!--1-->
							<!--2-->
						</div>
					</div>
				</div>
			</div>
			<!-- phan3-tintuc-right -->
			<!-- ./right-2 -->
			@include('includes/homepage.right_content')
			<!-- row-1 -->
		</div>
	</div>
</div>
<!--contact-->
 <!-- slide-anh -->
  <!-- slide-anh -->
  <div class="container">
    <div class="slide-show">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div id="carousel-example" class="carousel slide team team-web-view" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active hovergallery text-center">
                <div class="row">
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.charlottenursey.co.uk/wp-content/themes/charlotte-nursey/images/charlotte-nursey-profile.jpg" alt="User one">
                      </div>
                      <div class="info">
                        <div class="name">Rohit Sharma</div>
                        <div class="degination">Director</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedincricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.charlottenursey.co.uk/wp-content/themes/charlotte-nursey/images/charlotte-nursey-profile.jpg" class="img-responsive" alt="Charles John">
                      </div>
                      <div class="info">
                        <div class="name">Giselle Childs</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.appstate.edu/academics/profiles/_images/scott-collier-400x400.jpg" class="img-responsive" alt="Charlotte Law">
                      </div>
                      <div class="info">
                        <div class="name">Scott Collier</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item hovergallery text-center ">
                <div class="row">
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.charlottenursey.co.uk/wp-content/themes/charlotte-nursey/images/charlotte-nursey-profile.jpg" alt="User one">
                      </div>
                      <div class="info">
                        <div class="name">Rohit Sharma</div>
                        <div class="degination">Director</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.charlottenursey.co.uk/wp-content/themes/charlotte-nursey/images/charlotte-nursey-profile.jpg" class="img-responsive" alt="Charles John">
                      </div>
                      <div class="info">
                        <div class="name">Giselle Childs</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://www.appstate.edu/academics/profiles/_images/scott-collier-400x400.jpg" class="img-responsive" alt="Charlotte Law">
                      </div>
                      <div class="info">
                        <div class="name">Scott Collier</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="col-item">
                      <div class="photo-shadow"></div>
                      <div class="photo">
                        <img src="http://ina-law.co.za/wp-content/uploads/Illse-Nieuwoudt-Profile.jpg" alt="Coleman Harmon">
                      </div>
                      <div class="info">
                        <div class="name">Notary</div>
                        <div class="degination">Expert Agent</div>
                        <div class="social-connect">
                          <a href="javascript:void(0);"><i class="fa fa-facebook cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus cricle"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin cricle"></i></a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection