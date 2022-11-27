<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
	<div class="row">
		<div class="col-12">
			<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
				<div class="container-fluid px-0">
					<a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" title="" data-placement="bottom" target="_blank"><img src="{{ asset('img/logo.png') }}" /> reBrandz</a>
					<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon mt-2">
							<span class="navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</span>
					</button>
					<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
						<ul class="navbar-nav navbar-nav-hover ms-auto">
							<li class="nav-item mx-2 {{ request()->is('/') ? 'active' : '' }}">
								<a class="nav-link ps-2 d-flex align-items-center" href="/">
									<i class="fas fa-home me-2 text-md"></i> Home
								</a>
							</li>
							<li class="nav-item mx-2 {{ request()->is('about') ? 'active' : '' }}">
								<a class="nav-link ps-2 d-flex align-items-center" href="">
									<i class="fas fa-building opacity-6 me-2 text-md"></i> About
								</a>
							</li>
							<li class="nav-item mx-2 {{ request()->is('contact') ? 'active' : '' }}">
								<a class="nav-link ps-2 d-flex align-items-center" href="">
									<i class="fas fa-mailbox opacity-6 me-2 text-md"></i> Contact
								</a>
							</li>
							<li class="nav-item dropdown dropdown-hover mx-2">
								<a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-poll opacity-6 me-2 text-md"></i> Case Study
									<i class="fa fa-chevron-down opacity-6 ml-2"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
									<div class="d-none d-lg-block">
										<li class="nav-item dropdown dropdown-hover dropdown-subitem">
											<a class="dropdown-item py-2 ps-3 border-radius-md" href="">
												<div class="w-100 d-flex align-items-center justify-content-between">
													<div>
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Simevi</h6>
														<span class="text-sm">Sistem Monitoring Evaluasi Hortikultura Indonesia</span>
													</div>
												</div>
											</a>
										</li>
										<li class="nav-item dropdown dropdown-hover dropdown-subitem">
											<a class="dropdown-item py-2 ps-3 border-radius-md" href="">
												<div class="w-100 d-flex align-items-center justify-content-between">
													<div>
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Simethris</h6>
														<span class="text-sm">Sistem Monitoring Wajib Tanam Hortikultura Strategis</span>
													</div>
												</div>
											</a>
										</li>
									</div>
								</ul>
							</li>
							<li class="nav-item ms-lg-auto">
								<a class="nav-link nav-link-icon me-2" href="" target="_blank">
									<i class="fa fa-github me-1"></i>
									<p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
								</a>
							</li>
							<li class="nav-item my-auto ms-3 ms-lg-0">
								<a href="" class="btn btn-sm bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Talk to Us</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>