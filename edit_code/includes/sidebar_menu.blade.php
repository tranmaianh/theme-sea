<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="" class="site_title"><i class="fa fa-paw"></i> <span>@lang('general.system')</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				@if (Auth::check())
				<img src="{{asset('images/user.png')}}" alt="..." class="img img-circle profile_img">
				@endif
			</div>
			
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3></h3>
				<ul class="nav side-menu">
					@if (Auth::check())
					<li><a><i class="fa fa-newspaper-o"></i>@lang('sidebar/general.news') <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ route('admin.news.index') }}">@lang('sidebar/general.list')</a></li>
							<li><a href="{{ route('admin.news.add') }}">@lang('sidebar/general.add')</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-list-ul"></i>@lang('sidebar/general.category') <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ route('admin.category.index') }}">@lang('sidebar/general.list')</a></li>
							<li><a href="{{ route('admin.category.create') }}">@lang('sidebar/general.add')</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-file-video-o "></i>@lang('sidebar/general.video') <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ route('admin.video.index') }}">@lang('sidebar/general.list')</a></li>
							<li><a href="{{ route('admin.video.create') }}">@lang('sidebar/general.add')</a></li>
						</ul>
					</li>
					@if(Auth::user()->role =="admin")
					<li><a><i class="fa fa-user" aria-hidden="true"></i>@lang('sidebar/general.users') <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ route('user.list') }}">@lang('sidebar/general.list')</a></li>
							<li><a href="{{ route('user.create') }}">@lang('sidebar/general.add')</a></li>
						</ul>
					</li>
					@endif
					@else
					<li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>@lang('auth/general.login') <span class="fa fa-chevron-down"></span></a>
					</li>
					<li><a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i>@lang('auth/general.register') <span class="fa fa-chevron-down"></span></a>
					</li>
					@endif
				</ul> 
			</div>
			<!-- /sidebar menu

			<!-- /menu footer buttons -->
			<div class="sidebar-footer hidden-small">
				<a data-toggle="tooltip" data-placement="top" title="Settings">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="FullScreen">
					<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Lock">
					<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				</a>
			</div>
			<!-- /menu footer buttons -->
		</div>
	</div>
</div>