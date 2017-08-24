<div class="container slider-header">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<!-- Hot news -->
		 <div class="row">     
     <div class="col-md-8 col-sm-8 sol-xs-12">
		<div class="carousel-inner margin-carousel">
			<?php foreach ($news_hot as $key => $value): ?>
				@if ($key == 0)
				<div class="item active">
					<a href="{{ route('news.show',['id'=>$value->id]) }}"><img src="{{ Storage::disk('local')->url($value->title_image) }}"></a>
					<div class="carousel-caption">
						<h4><a href="{{ route('news.show',['id'=>$value->id]) }}">{{ $value->title }}</a></h4>
						<p>{{ substr($value->description,0,200) }}... <a class="label label-primary" href="{{ route('news.show',['id'=>$value->id]) }}" target="_blank">Xem thêm</a></p>
					</div>
				</div><!-- End Item -->
				@elseif ($key < 5)
				<div class="item">
					<a href="{{ route('news.show',['id'=>$value->id]) }}"><img src="{{ Storage::disk('local')->url($value->title_image) }}"></a>
					<div class="carousel-caption">
						<h4><a href="{{ route('news.show',['id'=>$value->id]) }}">{{ $value->title }}</a></h4>
						<p>{{ substr($value->description,0,200) }}...<a class="label label-primary" href="{{ route('news.show',['id'=>$value->id]) }}" target="_blank">Xem thêm</a></p>
					</div>
				</div><!-- End Item -->
				@endif
			<?php endforeach ?>
		</div><!-- End Carousel Inner -->
</div>
		<!-- List hot news -->
		 <div class="col-md-4 col-sm-4 hidden-xs">
		<ul class="list-group">
			<?php foreach ($news_hot as $key => $value): ?>
				@if ($key == 0)
				<li data-target="#myCarousel" data-slide-to="{{ $key }}" class="list-group-item active"><h4>{{ $value->title }}</h4></li>
				@elseif ($key < 5)
				<li data-target="#myCarousel" data-slide-to="{{ $key }}" class="list-group-item"><h4>{{ $value->title }}</h4></li>
				@endif
			<?php endforeach ?>
		</ul>
		</div>
		</div>

	</div><!-- End Carousel -->
</div>