<!-- ./right-2 -->
<div class="right-fix-home fixed">
	<div class="col-md-3 col-xs-12 col-sm-4">
		<!-- form hoivien-->
		<div class="news-right block-home-right">
			<!--End Tin tuc-->
			<div class="newss-form">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form action="" method="POST" role="form">
							<div class="form-group">
								<input type="text" class="form-control email-form" id="" placeholder="Nhập email để nhận bản tin">
								<input type="submit" class="btn btn-submit submit" placeholder="Gửi">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- tinmoi -->
			<!-- new-best -->
			<div class="tintuc_left form-group">
				<div class="link-block padd-block text-center-title">
					<a href="#" class="tintuc left-news">Tin hot</a>
					<div class="border-bottom"></div>
				</div>
				<div class="left-news">
					<!-- ./slide-images -->
					<div class="new-best project-list">
						<?php foreach ($news_hot as $key => $value): ?>
							<a href="{{ route('news.show',['id'=>$value->id]) }}" class="a-link" title="{{ $value->title }}">
								<div class="text-top">
									<div class="row ">
										<div class="col-md-5 col-sm-6 col-xs-12">
											<div class="left-img">
												<img src="{{ Storage::disk('local')->url($value->title_image) }}" class="img-news">
											</div>
										</div>
										<div class="col-md-7 col-sm-6 col-xs-12">
											<div class="text-new-1">
												<span class="a-link">{{ str_limit($value->title,$limit=15,$end='...') }}</span>
												<span class="h5-tt">{{ Carbon\Carbon::parse($value->posted_at)->format('d/m/Y') }}</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<!-- banner -->
			<!-- tinhot -->
			<div class="tintuc_left">
				<div class="link-block padd-block text-center-title">
					<a href="#" class="tintuc left-news">Tin mới nhất</a>
					<div class="border-bottom"></div>
				</div>
				<div class="left-news">
					@if (!count($news_recent))
					Không có dữ liệu
					@else
					<div class="row">
						<a href="{{ route('news.show',['id'=>$news_recent[0]->id]) }}" title="{{ $news_recent[0]->title }}">
							<div class="col-md-5 col-sm-6 col-xs-12">
								<div class="left-img">
									<img src="{{ Storage::disk('local')->url($news_recent[0]->title_image) }}" class="img-news" title="{{ $news_recent[0]->title }}">
									<span class="h5-tt">{{ Carbon\Carbon::parse($news_recent[0]->posted_at)->format('d/m/Y') }}</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<div class="text-new-1">
									<p class="p-text">{{ $news_recent[0]->title }}</p>
									<div class="tag-link">
									</div>
								</div>
							</div>
						</div>
					</a>
					<div class="project-list-ul">
						<div class="list-block">
							<ul class="tintuc-list">
								<?php foreach ($news_recent as $key => $value): ?>
									@if ($key > 0)
									<li "><a href="{{ route('news.show',['id'=>$value->id]) }}" title="{{ $value->title }}"><i class="fa fa-plus-circle "></i>{{ str_limit($value->title,$limit=30,$end='...') }}</a></li>
									@endif
								<?php endforeach ?>
							</ul>
						</div>
					</div>
					@endif
				</div>
			</div>
			<!--  new-hot -->
			<div class="row">
			<div class="poster col-xs-12">
				<img src="{{ asset('images/banner-1.png') }}" alt="poster" class="img-responsive">
			</div>
			</div>
			<div class="row">
			<div class="poster col-xs-12 ">
				<img src="{{ asset('images/banner-2.png') }}" alt="poster" class="img-responsive">
			</div>
			</div>
			<div class="row">
			<div class="poster col-xs-12">
				<img src="{{ asset('images/banner-3.png') }}" alt="poster" class="img-responsive">
			</div>
			</div>
		</div>
		<!--  END-RIGHT -->
	</div>
	<!--3-->
</div>