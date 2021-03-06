<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
		<!-- Begin:: Menu definition -->
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<!-- section: aside left -->
			@section('aside-left')

				<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
					<a  href="index.html" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-line-graph"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									Dashboard
								</span>

								<span class="m-menu__link-badge">
									<span class="m-badge m-badge--danger">
										2
									</span>
								</span>
							</span>
						</span>
					</a>
				</li>

				<!-- Menu Separator label -->
				<li class="m-menu__section">
					<h4 class="m-menu__section-text">
						Menu
					</h4>
					<i class="m-menu__section-icon flaticon-more-v3"></i>
				</li>
				<!-- ./Menu Separator label -->

				<!-- Menu items -->
				<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
					<!-- Menu toggle -->
					<a  href="#" class="m-menu__link m-menu__toggle">
						<i class="m-menu__link-icon flaticon-signs-2"></i>
						<span class="m-menu__link-text">
							Utils
						</span>
						<i class="m-menu__ver-arrow la la-angle-right"></i>
					</a>
					<!-- ./Menu toggle -->

					<!-- Dropdown menu -->
					<div class="m-menu__submenu">
						<span class="m-menu__arrow"></span>
						<!-- Dropdown menu items -->
						<ul class="m-menu__subnav">
							<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
								<a  href="#" class="m-menu__link ">
									<span class="m-menu__link-text">
										Utils
									</span>
								</a>
							</li>

							<li class="m-menu__item " aria-haspopup="true" >
								<a  href="components/utils/session-timeout.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
										Session Timeout
									</span>
								</a>
							</li>

							<li class="m-menu__item " aria-haspopup="true" >
								<a  href="components/utils/idle-timer.html" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
										Idle Timer
									</span>
								</a>
							</li>
						</ul>
						<!-- ./Dropdown menu items -->
					</div>
					<!-- ./Dropdown Menu -->
				</li>
				<!-- ./Menu items -->
			@show
			<!-- ./section aside-left -->
		</ul>
		<!-- end: Menu definition -->
	</div>
	<!-- END: Aside Menu -->
</div>