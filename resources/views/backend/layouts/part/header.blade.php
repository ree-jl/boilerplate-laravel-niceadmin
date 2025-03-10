<header id="header" class="header fixed-top d-flex align-items-center">

	<div class="d-flex align-items-center justify-content-between">
		<a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center">
			<img src="{{ asset('assets/b/img/') }}/logo.png" alt="{{ config('app.name') }}">
			<span class="d-none d-lg-block">{{ config('app.name') }}</span>
		</a>
		<i class="bi bi-list toggle-sidebar-btn"></i>
	</div><!-- End Logo -->

	<nav class="header-nav ms-auto">
		<ul class="d-flex align-items-center">

			<li class="nav-item dropdown pe-3">

				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
					<img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}?background=random?rounded=true"
						alt="Profile" class="rounded-circle">
					<span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
				</a><!-- End Profile Iamge Icon -->

				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
					<li class="dropdown-header">
						<h6>{{ auth()->user()->name }}</h6>
						<span>Web Designer</span>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>

					<li>
						<a class="dropdown-item d-flex align-items-center" href="#">
							<i class="bi bi-person"></i>
							<span>My Profile</span>
						</a>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>

					<li>
						<a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
							onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="bi bi-box-arrow-right"></i>
							<span>{{ __('Logout') }}</span>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>

				</ul><!-- End Profile Dropdown Items -->
			</li><!-- End Profile Nav -->

		</ul>
	</nav><!-- End Icons Navigation -->

</header>