<li><a href="{{ route('homepage.index') }}" class="home">Trang chủ</a></li>
<?php foreach ($categories as $value): ?>
	@if (count($value->children) == 0)
	<!-- <li><a href="{{ route('category.index',['level_1'=>$value->id]) }}" class="home">{{ $value->title }}</a></li> -->
	<li><a href="{{ route('news.getNewsFromCategory',['category_id'=>$value->id]) }}" class="home">{{ $value->title }}</a></li>
	@else
	<li class=" dropdown"><a href="#" class="dropdown-toggle introduct disabled" data-toggle="dropdown">{{ $value->title }}</a>
		<ul class="sub-menu dropdown-menu">
			<?php foreach ($value->children as $child1): ?>
			@if ($child1->status == 1)
				@if (count($child1->children) == 0)
				<!-- <li><a href="{{ route('category.index',['level_1'=>$value->id,'level_2'=>$child1->id]) }}">{{ $child1->title }}</a></li> -->
				<li><a href="{{ route('news.getNewsFromCategory',['category_id'=>$child1->id]) }}">{{ $child1->title }}</a></li>
				@else
				<li class="dropdown"><a hreft="#" class="dropdown-toggle disabled" data-toggle="dropdown" aria-expanded="">{{ $child1->title }}</a>
					<ul class="sub-menu dropdown-menu menu-2">
						<?php foreach ($child1->children as $child2): ?>
						@if ($child2->status == 1)
							<li><a href="{{ route('news.getNewsFromCategory',['category_id'=>$child2->id]) }}">{{ $child2->title }}</a></li>
							<!-- <li><a href="{{ route('category.index',['level_1'=>$value->id,'level_2'=>$child1->id,'level_3'=>$child2->id]) }}">{{ $child2->title }}</a></li> -->
						@endif
						<?php endforeach ?><!-- End level3 -->
					</ul>
				</li>
				@endif
			@endif
			<?php endforeach ?><!-- End level2 -->
		</ul>
	</li>
	@endif
<?php endforeach ?><!-- End level1 -->