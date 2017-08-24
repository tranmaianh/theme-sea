<header>
	<div id="header-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="icon-header col-md-8 col-sm-6 xol-xs-12">
							<a href="#"><i class="fa fa-facebook cricle"></i></a>
							<a href="#"><i class="fa fa-twitter cricle"></i></a>
							<a href="#"><i class="fa fa-linkedin cricle"></i></a>
						</div>
						<!-- User Model -->
						<div class="hidden-xs col-md-4 col-sm-6 pull-right" id="right-menu-bar">
								@include('includes/homepage.login_model')
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--row-1-->
		<div class="header-winner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9 col-sm-9">
						<div class="col-xs-4 col-sm-3 col-md-3 text-center ">
							<a href="#"><img src="{{ asset('images/vsalogo.png') }}" alt="vsalogo" class="img-responsive"></a>
						</div>
						<div class="col-xs-8 col-sm-9 col-md-9 text-center text-info-vsa">
							<div class="title-header">
								<h1 class="text-logo font-text-h1">HIỆP HỘI NUÔI BIỂN VIỆT NAM</h1>
								<h2 class="text-logo font-text-h2">VIETNAM SEACULTURE ASSOCIATION</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-3 ">
						<div class="map-time">
							<div class="address-time">
								<div class="address-info">
									<p>
										<a href="#" class="glyphicon "></a> Hà Nội, Việt Nam
									</p>
								</div>
								<div id="calendar">
									<p class="calendar-info">
										<span id="calendar-day"></span>,
										<span id="calendar-date"></span>/<span id="calendar-month-year"></span>
									</p>
								</div>
							</div>
							<div class="weather-img">
								<img src="{{ asset('images/300.png') }}" alt="">
							</div>
						</div>
						<div class="form-search hidden-xs search-md ">
							<div class="col-md-12 pull-right">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Tìm kiếm...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
								<!-- /input-group -->
							</div>
							<!-- /.col-lg-9 -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Menu-->
		<div class="container submenu-reponsive">
			<div class="row">
				<nav class="navbar navbar-default header-nav " role="navigation">
					<div class="container">
						<div class="header-menu">
							<div class="navbar-header ul-menu">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="text-uppercase">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<div class="form-search search-xs">
										<div class="col-md-12 pull-right">
											<div class="input-group">
												<input type="text" class="form-control search-input" placeholder="Tìm kiếm...">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											</div>
											<!-- /input-group -->
										</div>
									<!-- /.col-lg-9 -->
								</div>
								<div class="hidden-md hidden-sm hidden-lg " style="display: inline-block;">
											<div class="mobile-icon icon-top">
													<button id="fat-menu" class="dropdown">
														<a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
															<img src="{{ asset('images/vietnam_icon.png') }}" alt="tiengviet" class="langu">
															Tiếng Việt 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu" aria-labelledby="drop3">
															<div class="arrow"></div>
															<li class="select-lg">
																<div class="title-acount">Select your language</div>
																<ul class="info-lg">
																	<li>
																		<a class="language-vi"><img src="{{ asset('images/vietnam_icon.png') }}" alt=""><span>Tiếng Việt</span></a>
																	</li>
																	<li>
																		<a class="language-vi"><img src="{{ asset('images/english_icon.png') }}" alt=""><span>English</span></a>
																	</li>
																</ul>
															</li>
														</ul>
													</button>
													@if (Auth::check())
													<button id="fat-menu" class="dropdown">
														<a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="{{ Auth::user()->name }}"> 
															<img src="{{ asset('images/user.png') }}" alt="tiengviet" class="langu">
															Xin chào: {{ str_limit(Auth::user()->name,$limit=8,$end='...') }}
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu" aria-labelledby="drop3">
															<div class="arrow"></div>
															<li class="select-lg">
																<div class="title-acount">Chọn chức năng</div>
																<ul class="info-lg">
																	<li>
																		<a href="{{ route('logout') }}"
																		onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">
																		><img src="images/english_icon.png" alt=""><span>Đăng xuất</span></a>
																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																			{{ csrf_field() }}
																		</form>
																	</li>
																</ul>
															</li>
														</ul>
													</button>
													@else
													<button class="drop-modal" type="button" data-toggle="modal" data-target="#login-model">
														<span class="glyphicon glyphicon-user"></span> Tài Khoản
													</button>
													<!-- Modal -->
													<div class="modal fade" id="login-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="arrow-modal"></div>
																<div>
																	<!-- Nav tabs -->
																	<ul class="nav nav-tabs" role="tablist">
																		<li role="presentation" class="active">
																			<a href="#login" aria-controls="home" role="tab" data-toggle="tab">Đăng nhập</a>
																		</li>
																		<li role="presentation" class="register-text">
																			<a href="#register" aria-controls="profile" role="tab" data-toggle="tab">Đăng ký</a>
																		</li>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	</ul>
																	<!-- Tab panes -->
																	<div class="tab-content">
																		<div role="tabpanel" class="tab-pane active" id="login">
																			<div class="col-sm-12 form-login-fb-g">
																				<p>Bạn có thể sử dụng tài khoản:</p>
																				<div class="col-sm-6 col-xs-12">
																					<a class="btn-danger form-facebook" href="{{ route('socialite.redirect',['provider'=>'facebook']) }}">
																						<span class="fa fa-facebook-z"></span>
																						<span class="sp-icon">Facebook</span>
																					</a>
																				</div>
																				<div class="col-sm-6 col-xs-12">
																					<a class="btn-danger form-google" href="{{ route('socialite.redirect',['provider'=>'google']) }}">
																						<span class="fa fa-google-plus-z"></span>
																						<span class="sp-icon">Google</span>
																					</a>
																				</div>
																			</div>
																			<div class="form-input-login">
																				<p>Đăng nhập bằng tài khoản của VSA</p>
																				<input placeholder="Địa chỉ email" id="login-email" class="form-control" type="email">
																				<input placeholder="Mật khẩu" id="login-password" class="form-control" type="password">
																				@if (isset($login_error))
																				<span class="help-block">
																					<strong>{{ $login_error }}</strong>
																				</span>
																				@endif
																			</div>
																			<div class="form-question">
																				<input id="checkbox1" name="checkbox" value="1" checked="checked" type="checkbox">
																				<label for="checkbox1">Lưu mật khẩu?</label>
																			</div>
																			<a href="">Quên mật khẩu?</a>
																			<button type="button" id="btn-login" class="btn btn-primary">Đăng nhập</button>
																			<div class="modal-footer">
																				<p>Chưa có tài khoản?<a href=""> Đăng ký</a></p>
																			</div>
																		</div>
																		<div role="tabpanel" class="tab-pane form-register" id="register">
																			<p>Đăng ký tài khoản mới tại VSA</p>
																			<input placeholder="Tên người dùng" id="register-name" class="form-control" type="email">
																			<input placeholder="Tài khoản, email" id="register-email" class="form-control" type="email">
																			<input placeholder="Mật khẩu" id="register-password" class="form-control" type="password">
																			<input placeholder="Nhập lại mật khẩu" id="register-password-confirmation" class="form-control" type="password">
																			<p class="text-condition">Chọn đăng ký là bạn đã đồng ý với các <span>Điều khoản, Điều kiện</span> cũng như các <span>Chính sách bảo mật</span> của VSA</p>
																			<button type="button" id="btn-register" class="btn btn-primary">Đăng ký</button>
																			<div class="modal-footer">
																				<p>Đã có tài khoản?<a href=""> Đăng nhập</a></p>
																			</div>
																		</div>
																	</div>
																</div>
																<!--End Tabs -->
															</div>
															<!--End modal-content -->
														</div>
													</div>
													@endif
											</div>
											</div>

									<ul class="nav navbar-nav menu-i menu-top">
										@include('includes/homepage.menu_bar')
									</ul>
								</div>
							</div>
							<!-- /.navbar-collapse -->
						</div>
					</div>
					<!--row-->
					<!-- /.container -->
				</nav>
			</div>
		</div>
	</div>
</header>